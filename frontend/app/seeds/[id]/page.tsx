"use client";

import { useEffect, useState } from "react";
import { useParams } from "next/navigation";
import { PageSection } from "../../components/PageSection";
import { seedsApi, type SeedPost, resolveStorageUrl } from "@/lib/api";
import styles from './seed.module.css';

export default function SeedShowPage() {
  const params = useParams<{ id: string }>();
  const id = Number(params.id);
  const [seed, setSeed] = useState<SeedPost | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    if (!id || Number.isNaN(id)) {
      setError("Некорректный идентификатор сида.");
      setLoading(false);
      return;
    }

    setError(null);
    setLoading(true);

    seedsApi
      .show(id)
      .then((response) => {
        setSeed(response.data);
      })
      .catch(() => {
        setError("Не удалось загрузить сид.");
      })
      .finally(() => {
        setLoading(false);
      });
  }, [id]);

  return (
    <div className={styles.pageContent}>
      <PageSection title={seed ? seed.title : "Сид"}>
        {loading && <p className={styles.loading}>Загрузка…</p>}
        {error && <p className={styles.formError}>{error}</p>}
        {!loading && !error && seed && (
          <div className={styles.spaceY4}>
            <div className={styles.spaceY2}>
              <p className={styles.infoText}>
                Автор: <strong>{seed.author.name}</strong>
              </p>
              <p className={styles.infoText}>
                Номер сида: <code>{seed.seed}</code>
              </p>
              <p className={styles.infoText}>
                Версия: <strong>{seed.version}</strong>, релиз: <strong>{seed.release}</strong>
              </p>
              <p className={styles.infoText}>
                Координаты: x = {seed.x}, y = {seed.y}, z = {seed.z}
              </p>
            </div>

            {seed.images && seed.images.length > 0 && (
              <div className={styles.grid}>
                {seed.images.map((src) => {
                  const resolved = resolveStorageUrl(src) ?? src;
                  return (
                    <div key={src} className={styles.imageContainer}>
                      <img 
                        src={resolved} 
                        alt={seed.title} 
                        className={styles.image}
                      />
                    </div>
                  );
                })}
              </div>
            )}
          </div>
        )}
      </PageSection>
    </div>
  );
}