"use client";

import { useEffect, useState } from "react";
import Image from "next/image";

type Developer = {
  id: number;
  name: string;
  role: string;
  bio: string | null;
  telegram: string | null;
  vk: string | null;
  skin_url: string | null;
};

const sliderImages = [
  "developers/разработчики_слайдер1.png",
  "developers/разработчики_слайдер2.png",
  "developers/разработчики_слайдер3.png",
  "developers/разработчики_слайдер4.png",
  "developers/разработчики_слайдер5.png",
];

export function DevelopersClient() {
  const [developers, setDevelopers] = useState<Developer[]>([]);
  const [sliderIndex, setSliderIndex] = useState(0);

  useEffect(() => {
    async function loadDevelopers() {
      try {
        const res = await fetch("http://localhost:8000/api/developers");
        if (!res.ok) {
          return;
        }
        const json = await res.json();
        setDevelopers(json.data ?? []);
      } catch {
        // ignore
      }
    }

    loadDevelopers();
  }, []);

  function moveSlider(delta: number) {
    const total = sliderImages.length;
    const next = (sliderIndex + delta + total) % total;
    setSliderIndex(next);
  }

  function sliderButtons() {
    return (
      <div>
        <button type="button" onClick={() => moveSlider(-1)}>
          ←
        </button>
        <button type="button" onClick={() => moveSlider(1)}>
          →
        </button>
        <button type="button" onClick={() => moveSlider(-1)}>
          ↑
        </button>
        <button type="button" onClick={() => moveSlider(1)}>
          ↓
        </button>
      </div>
    );
  }

  return (
    <main>
      <h1>Разработчики</h1>

      <section>
        <h2>Слайдер</h2>
        {sliderButtons()}
        <div>
          <Image
            key={sliderImages[sliderIndex]}
            src={`/images/${sliderImages[sliderIndex]}`}
            alt="Слайд разработчиков"
            width={800}
            height={600}
            priority
            unoptimized
          />
        </div>
        <p>Текущий слайд: {sliderIndex + 1}</p>
      </section>

      <section>
        {developers.length === 0 && <p>Разработчики пока не добавлены.</p>}

        {developers.map((developer) => (
          <article key={developer.id}>
            <h3>{developer.name}</h3>
            <p>{developer.role}</p>
            {developer.bio && <p>{developer.bio}</p>}

            {(developer.telegram || developer.vk) && (
              <div>
                {developer.telegram && (
                  <div>
                    Telegram:{" "}
                    <a
                      href={`https://t.me/${developer.telegram.replace(/^@/, "")}`}
                    >
                      {developer.telegram}
                    </a>
                  </div>
                )}
                {developer.vk && (
                  <div>
                    VK:{" "}
                    <a
                      href={`https://vk.com/${developer.vk.replace(/^@/, "")}`}
                    >
                      {developer.vk}
                    </a>
                  </div>
                )}
              </div>
            )}

            {developer.skin_url && (
              <div>
                <Image
                  src={developer.skin_url}
                  alt={`Скин ${developer.name}`}
                  width={200}
                  height={300}
                />
              </div>
            )}
          </article>
        ))}
      </section>
    </main>
  );
}

