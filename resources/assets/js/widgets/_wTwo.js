/** 
 * 
 * Sales
 * 
**/

window.addEventListener("load", function(){
    try {
  
      let getcorkThemeObject = sessionStorage.getItem("theme");
      let getParseObject = JSON.parse(getcorkThemeObject)
      let ParsedObject = getParseObject;
  
      if (ParsedObject.settings.layout.darkMode) {
        
        var Theme = 'dark';
    
        Apex.tooltip = {
            theme: Theme
        }
    
        /**
            ==============================
            |    @Options Charts Script   |
            ==============================
        */
        
        /*
            =============================
                Daily Sales | Options
            =============================
        */
        var d_2options1 = {
          chart: {
              height: 160,
              type: 'bar',
              stacked: true,
              stackType: '100%',
              toolbar: {
                  show: false,
              }
          },
          dataLabels: {
              enabled: false,
          },
          stroke: {
              show: true,
              width: [3, 4],
              curve: "smooth",
          },
          colors: ['#e2a03f', '#e0e6ed'],
          series: [{
              name: 'Sales',
              data: [44, 55, 41, 67, 22, 43, 21]
          },{
              name: 'Last Week',
              data: [13, 23, 20, 8, 13, 27, 33]
          }],
          xaxis: {
              labels: {
                  show: false,
              },
              categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
              crosshairs: {
              show: false
              }
          },
          yaxis: {
              show: false
          },
          fill: {
              opacity: 1
          },
          plotOptions: {
              bar: {
                  horizontal: false,
                  columnWidth: '25%',
                  borderRadius: 8,
              }
          },
          legend: {
              show: false,
          },
          grid: {
              show: false,
              xaxis: {
                  lines: {
                      show: false
                  }
              },
              padding: {
              top: -20,
              right: 0,
              bottom: -40,
              left: 0
              }, 
          },
          responsive: [
              {
                  breakpoint: 575,
                  options: {
                      plotOptions: {
                          bar: {
                              borderRadius: 5,
                              columnWidth: '35%'
                          }
                      },
                  }
              },
          ],
        }
  
      } else {
  
        var Theme = 'dark';
    
        Apex.tooltip = {
            theme: Theme
        }
    
        /**
            ==============================
            |    @Options Charts Script   |
            ==============================
        */
        
        /*
            =============================
                Daily Sales | Options
            =============================
        */
        var d_2options1 = {
          chart: {
              height: 160,
              type: 'bar',
              stacked: true,
              stackType: '100%',
              toolbar: {
                  show: false,
              }
          },
          dataLabels: {
              enabled: false,
          },
          stroke: {
              show: true,
              width: [3, 4],
              curve: "smooth",
          },
          colors: ['#e2a03f', '#e0e6ed'],
          series: [{
              name: 'Sales',
              data: [44, 55, 41, 67, 22, 43, 21]
          },{
              name: 'Last Week',
              data: [13, 23, 20, 8, 13, 27, 33]
          }],
          xaxis: {
              labels: {
                  show: false,
              },
              categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
              crosshairs: {
              show: false
              }
          },
          yaxis: {
              show: false
          },
          fill: {
              opacity: 1
          },
          plotOptions: {
              bar: {
                  horizontal: false,
                  columnWidth: '25%',
                  borderRadius: 8,
              }
          },
          legend: {
              show: false,
          },
          grid: {
              show: false,
              xaxis: {
                  lines: {
                      show: false
                  }
              },
              padding: {
              top: -20,
              right: 0,
              bottom: -40,
              left: 0
              }, 
          },
          responsive: [
              {
                  breakpoint: 575,
                  options: {
                      plotOptions: {
                          bar: {
                              borderRadius: 5,
                              columnWidth: '35%'
                          }
                      },
                  }
              },
          ],
        }

      }
      
    
    /**
        ==============================
        |    @Render Charts Script    |
        ==============================
    */
    
    
    /*
        ============================
            Daily Sales | Render
        ============================
    */
    var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
    d_2C_1.render();
    
    
    } catch(e) {
        console.log(e);
    }
})