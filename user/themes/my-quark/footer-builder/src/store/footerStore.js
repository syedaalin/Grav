import { create } from 'zustand';

export const useFooterStore = create((set, get) => ({
  gridConfig: {
    columns: 12,
    gap: 4, // tailwind spacing unit (1rem)
    rows: 4,
  },
  cells: [
    { id: '1', type: 'branding', colStart: 1, colSpan: 4, rowStart: 1, rowSpan: 2, content: { title: 'Branding' } },
    { id: '2', type: 'menu', colStart: 5, colSpan: 2, rowStart: 1, rowSpan: 2, content: { title: 'Resources' } },
    { id: '3', type: 'newsletter', colStart: 7, colSpan: 6, rowStart: 1, rowSpan: 2, content: { title: 'Newsletter' } },
    { id: '4', type: 'social', colStart: 1, colSpan: 4, rowStart: 3, rowSpan: 1, content: { title: 'Social' } },
    { id: '5', type: 'copyright', colStart: 1, colSpan: 12, rowStart: 4, rowSpan: 1, content: { title: 'Copyright' } },
  ],
  
  updateCell: (id, updates) => set((state) => ({
    cells: state.cells.map((cell) => (cell.id === id ? { ...cell, ...updates } : cell)),
  })),

  addCell: (type) => set((state) => {
     const newCell = {
         id: crypto.randomUUID(),
         type,
         colStart: 1,
         colSpan: 3,
         rowStart: 1,
         rowSpan: 1,
         content: { title: 'New Widget' }
     };
     return { cells: [...state.cells, newCell] };
  }),

  removeCell: (id) => set((state) => ({
    cells: state.cells.filter((cell) => cell.id !== id),
  })),

  setCells: (cells) => set({ cells }),
}));
