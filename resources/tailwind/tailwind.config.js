module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary : '#014F86',
        primaryHover : '#003C75',
        primaryDark : '#015998',
        primaryLight : '#307BB1',
        secondary : '#FFAA00',
        secondaryhover : '#FFBB34',
      },
      fontFamily: {
        heading: ['Poppins'],
        paragraph: ['Cabin'],
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer')
  ],
}
