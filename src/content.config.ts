import { defineCollection } from 'astro:content';
import { glob } from 'astro/loaders';
import { z } from 'astro/zod';

const projects = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/projects' }),
  schema: z.object({
    project: z.string(),
    img: z.string(),
    imgAlt: z.string().optional(),
    tags: z.array(z.string()),
    title: z.string().optional(),
  }),
});

export const collections = {
  projects,
};

