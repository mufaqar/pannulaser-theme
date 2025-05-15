module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    './src/**/*.{js,jsx,ts,tsx}',
  ],
  theme: {
    extend: {
      fontFamily: {
        axiformaregular: ['axiformaregular', 'sans-serif'],
        axiformabold: ['axiformabold', 'sans-serif'],    
      },
     colors: {
      primary: 'var(--primary)',
      secondry: 'var(--secondry)',
      topBarBg: 'var(--topBarBg)',
      Pan_black: 'var(--Pan_black)',
      hovLink: 'var(--hovLink)',
    }
    },
  },
  plugins: [],
}
