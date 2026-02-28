"use client";

import Link from "next/link";

const slides = [
  { id: 1, gradient: "from-emerald-900 via-teal-800 to-cyan-900" },
  { id: 2, gradient: "from-stone-800 via-zinc-800 to-slate-800" },
  { id: 3, gradient: "from-green-900 via-emerald-800 to-teal-900" },
];

export function HeroSlider() {
  return (
    <section className="relative h-[70vh] min-h-[400px] overflow-hidden">
      <div
        className="flex h-full w-[300%]"
        style={{ animation: "home-slider 15s ease-in-out infinite" }}
      >
        {slides.map((slide) => (
          <div
            key={slide.id}
            className={`h-full w-1/3 shrink-0 bg-gradient-to-br ${slide.gradient}`}
          />
        ))}
      </div>
      <div className="absolute inset-0 flex flex-col items-center justify-center gap-6 px-4">
        <h1 className="text-center text-4xl font-bold uppercase tracking-wider text-white drop-shadow-lg md:text-5xl lg:text-6xl">
          Самый лучший сайт
        </h1>
        <Link
          href="/auth/register"
          className="rounded-full bg-white px-8 py-3 text-base font-semibold text-emerald-800 shadow-lg transition hover:bg-zinc-100"
        >
          Зарегистрироваться
        </Link>
      </div>
    </section>
  );
}
