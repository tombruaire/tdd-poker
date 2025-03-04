const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    baseUrl: 'http://127.0.0.1:8000',
    experimentalRunAllSpecs: true,
  },
  viewportWidth: 1500,
  viewportHeight: 1000,
  pageLoadTimeout: 60000,
});
