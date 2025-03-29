const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    baseUrl:"http://localhost:8000",
    viewportHeight:720,
    viewportWidth: 1024,
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
