import Link from "next/link";
import { BackendStatus } from "./components/BackendStatus";
import { HeroSlider } from "./components/HeroSlider";

export default function Home() {
  return (
    <div className="bg-zinc-50 dark:bg-zinc-950">
      {/* 1. Баннер со слайдером */}
      <HeroSlider />

      <main className="mx-auto max-w-6xl px-4 py-8">
        <BackendStatus />
      </main>

      {/* 2. Блок Постройки */}
      <section className="border-t border-zinc-200 bg-white py-16 dark:border-zinc-800 dark:bg-zinc-900">
        <div className="mx-auto max-w-6xl px-4">
          <h2 className="text-center text-3xl font-bold text-zinc-900 dark:text-zinc-100">
            Постройки
          </h2>
          <div className="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            {[1, 2, 3].map((i) => (
              <div
                key={i}
                className="aspect-[4/3] overflow-hidden rounded-xl bg-zinc-200 dark:bg-zinc-700"
              >
                <div className="flex h-full w-full items-center justify-center text-zinc-500 dark:text-zinc-400">
                  Постройка {i}
                </div>
              </div>
            ))}
          </div>
          <div className="mt-10 flex justify-center">
            <Link
              href="/builds"
              className="rounded-full border-2 border-zinc-800 px-8 py-3 font-medium text-zinc-800 transition hover:bg-zinc-800 hover:text-white dark:border-zinc-200 dark:text-zinc-200 dark:hover:bg-zinc-200 dark:hover:text-zinc-900"
            >
              Посмотреть постройки
            </Link>
          </div>
        </div>
      </section>

      {/* 3. Блок Скины */}
      <section className="border-t border-zinc-200 py-16 dark:border-zinc-800">
        <div className="mx-auto max-w-6xl px-4">
          <h2 className="text-center text-3xl font-bold text-zinc-900 dark:text-zinc-100">
            Скины
          </h2>
          <div className="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4">
            {[1, 2, 3, 4].map((i) => (
              <div
                key={i}
                className="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-800"
              >
                <div className="aspect-square bg-zinc-100 dark:bg-zinc-700">
                  <div className="flex h-full w-full items-center justify-center text-sm text-zinc-500 dark:text-zinc-400">
                    Скин {i}
                  </div>
                </div>
                <div className="p-3 text-center text-sm font-medium text-zinc-700 dark:text-zinc-300">
                  Карточка скина {i}
                </div>
              </div>
            ))}
          </div>
          <div className="mt-10 flex justify-center">
            <Link
              href="/skins"
              className="rounded-full border-2 border-zinc-800 px-8 py-3 font-medium text-zinc-800 transition hover:bg-zinc-800 hover:text-white dark:border-zinc-200 dark:text-zinc-200 dark:hover:bg-zinc-200 dark:hover:text-zinc-900"
            >
              Посмотреть скины
            </Link>
          </div>
        </div>
      </section>

      {/* 4. Блок Сиды */}
      <section className="border-t border-zinc-200 bg-white py-16 dark:border-zinc-800 dark:bg-zinc-900">
        <div className="mx-auto max-w-6xl px-4">
          <h2 className="text-center text-3xl font-bold text-zinc-900 dark:text-zinc-100">
            Сиды
          </h2>
          <div className="mt-10 flex justify-center">
            <div className="aspect-video w-full max-w-3xl overflow-hidden rounded-xl bg-zinc-800 shadow-xl">
              <div className="flex h-full w-full items-center justify-center text-zinc-400">
                Скриншот из игры
              </div>
            </div>
          </div>
          <div className="mt-10 flex justify-center">
            <Link
              href="/seeds"
              className="rounded-full border-2 border-zinc-800 px-8 py-3 font-medium text-zinc-800 transition hover:bg-zinc-800 hover:text-white dark:border-zinc-200 dark:text-zinc-200 dark:hover:bg-zinc-200 dark:hover:text-zinc-900"
            >
              Посмотреть сиды
            </Link>
          </div>
        </div>
      </section>

      {/* 5. Блок Моды */}
      <section className="border-t border-zinc-200 py-16 dark:border-zinc-800">
        <div className="mx-auto max-w-6xl px-4">
          <h2 className="text-center text-3xl font-bold text-zinc-900 dark:text-zinc-100">
            Моды
          </h2>
          <div className="mt-10 rounded-2xl border border-zinc-200 bg-white p-8 dark:border-zinc-700 dark:bg-zinc-800 md:p-12">
            <p className="text-center text-zinc-600 dark:text-zinc-400">
              Скачивайте моды для Minecraft: Java, Bedrock и универсальные. Описание, скриншоты и файлы в одном месте.
            </p>
          </div>
          <div className="mt-10 flex justify-center">
            <Link
              href="/mods"
              className="rounded-full border-2 border-zinc-800 px-8 py-3 font-medium text-zinc-800 transition hover:bg-zinc-800 hover:text-white dark:border-zinc-200 dark:text-zinc-200 dark:hover:bg-zinc-200 dark:hover:text-zinc-900"
            >
              Подробнее
            </Link>
          </div>
        </div>
      </section>
    </div>
  );
}
