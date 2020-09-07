/* global mapboxgl */
/* global window */
const scriptjs = require("scriptjs");

export default {
  init() {
    scriptjs("//api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js", () => {
      mapboxgl.accessToken = window.mapboxAccessToken;
      this.loadMapbox();
    });
  },

  loadMapbox() {
    if ($("#members-map").length) {
      let map = new mapboxgl.Map({
        container: "members-map",
        style: "mapbox://styles/mapbox/light-v9",
        center: [-96, 37.8],
        zoom: 3,
        maxZoom: 5,
        minZoom: 3,
      });

      let mapHawaii = new mapboxgl.Map({
        container: "members-map-hawaii",
        style: "mapbox://styles/mapbox/light-v9",
        center: [-157.9838322, 21.392589],
        zoom: 4,
        maxZoom: 5,
        minZoom: 1,
      });

      map.on("load", function() {
        $.ajax({
          dataType: "jsonp",
          url:
            "https://members.oeglobal.org/api/v1/address/list/geo/consortium/CCCOER/",
          data: { format: "jsonp" },
          success: function(geoJsonData) {
            let layerOptions = {
              id: "members",
              type: "circle",
              source: {
                type: "geojson",
                data: geoJsonData,
              },
              paint: {
                "circle-radius": {
                  base: 2,
                  stops: [[3, 4], [5, 8]],
                },
                "circle-color": "#1F3EB9",
                "circle-opacity": 0.5,
                "circle-stroke-width": 2,
                "circle-stroke-color": "#4171DD",
                "circle-stroke-opacity": 0.8,
              },
            };
            map.addLayer(layerOptions);
            mapHawaii.addLayer(layerOptions);
          },
        });
      });
    }

    if ($(".members-toc").length) {
      $(".members-toc a").on("click", function() {
        let anch = $(this)
          .attr("href")
          .substr(1);
        let targetAnchor = $(`a[name="${anch}"]`);
        $("html,body").animate(
          { scrollTop: targetAnchor.offset().top - 50 },
          "slow"
        );
        return false;
      });
    }
  },

  finalize() {},
};
