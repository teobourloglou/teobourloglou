/**
 * Fetch and load components into specified element IDs.
 *
 * @param {Array} components - An array of component objects with 'name' and 'elementId' properties.
 * @returns {void}
 */
const fetchComponents = (components) => {
    components.forEach((component) => {
      const { name, elementId } = component;
      fetch(`components/${name}.html`)
        .then((response) => response.text())
        .then((data) => {
          const element = document.getElementById(elementId);
          if (element) {
            element.innerHTML = data;
            if (name === "allEvents") {
              fetchOrCacheEvents(sheetUrl);
            } else if (name === "someEvents") {
              fetchOrCacheEvents(sheetUrl, true);
            }
          }
        });
    });
  };


/**
 * Fetches all data from the JSON file.
 *
 * @returns {void}
 */
const fetchData = () => {
  return {
      data: {},
      loadData() {
          fetch('data.json')
              .then(response => {
                  if (!response.ok) {
                      throw new Error('Network response was not ok');
                  }
                  return response.json();
              })
              .then(json => {
                  this.data = json;
              })
              .catch(error => {
                  console.error('There has been a problem with your fetch operation:', error);
              });
      }
  };
}