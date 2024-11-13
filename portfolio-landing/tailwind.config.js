/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      backgroundImage: {
        layout_bg: 'repeat-linear-gradient(to bottom, #121212, #252525)'
        // glow_stripe: 'linear-gradient(to right, transparent, #0066cc, transparent)'
      },
      fontFamily: {
        satisfy: ['satisfy', 'cursive'],
        anek: ['anek', 'sans-serif']
      }
    },
    patterns: {
      opacities: {
        100: '1',
        80: '.80',
        60: '.60',
        40: '.40',
        20: '.20',
        10: '.10',
        5: '.05'
      },
      sizes: {
        1: '0.25rem',
        2: '0.5rem',
        4: '1rem',
        6: '1.5rem',
        8: '2rem',
        16: '4rem',
        20: '5rem',
        24: '6rem',
        32: '8rem'
      }
    }
  },
  variants: {
    extends: {}
  },
  plugins: [require('tailwindcss-bg-patterns')]
}
