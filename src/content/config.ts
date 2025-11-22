import { defineCollection, z } from 'astro:content';

const projects = defineCollection({
  type: 'content',
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

