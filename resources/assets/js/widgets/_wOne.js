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
                Total Orders | Options
            =============================
        */
        var d_2options2 = {
          chart: {
            id: 'sparkline1',
            group: 'sparklines',
            type: 'area',
            height: 290,
            sparkline: {
              enabled: true
            },
          },
          stroke: {
              curve: 'smooth',
              width: 2
          },
          fill: {
            type:"gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .30,
                opacityTo: .05,
                stops: [100, 100]
            }
          },
          series: [{
            name: 'Sales',
            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
          }],
          labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
          yaxis: {
            min: 0
          },
          grid: {
            padding: {
              top: 125,
              right: 0,
              bottom: 0,
              left: 0
            }, 
          },
          tooltip: {
            x: {
              show: false,
            },
            theme: Theme
          },
          colors: ['#00ab55']
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
                Total Orders | Options
            =============================
        */
        var d_2options2 = {
          chart: {
            id: 'sparkline1',
            group: 'sparklines',
            type: 'area',
            height: 290,
            sparkline: {
              enabled: true
            },
          },
          stroke: {
              curve: 'smooth',
              width: 2
          },
          fill: {
            opacity: 1,
            // type:"gradient",
            // gradient: {
            //     type: "vertical",
            //     shadeIntensity: 1,
            //     inverseColors: !1,
            //     opacityFrom: .30,
            //     opacityTo: .05,
            //     stops: [100, 100]
            // }
          },
          series: [{
            name: 'Sales',
            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
          }],
          labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
          yaxis: {
            min: 0
          },
          grid: {
            padding: {
              top: 125,
              right: 0,
              bottom: 0,
              left: 0
            }, 
          },
          tooltip: {
            x: {
              show: false,
            },
            theme: Theme
          },
          colors: ['#00ab55']
        }

      }
      
    
    /**
        ==============================
        |    @Render Charts Script    |
        ==============================
    */
    
    
    /*
        ============================
            Total Orders | Render
        ============================
    */
    var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
    d_2C_2.render();
  
    /**
       * =================================================================================================
       * |     @Re_Render | Re render all the necessary JS when clicked to switch/toggle theme           |
       * =================================================================================================
       */
    
    document.querySelector('.theme-toggle').addEventListener('click', function() {
  
      // console.log(sessionStorage);
  
      let getcorkThemeObject = sessionStorage.getItem("theme");
      let getParseObject = JSON.parse(getcorkThemeObject)
      let ParsedObject = getParseObject;
  
      if (ParsedObject.settings.layout.darkMode) {  
  
        /*
            =============================
                Total Orders | Options
            =============================
        */
  
        d_2C_2.updateOptions({
          fill: {
            type:"gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .30,
                opacityTo: .05,
                stops: [100, 100]
            }
          }
        })
  
      } else {  
  
        /*
            =============================
                Total Orders | Options
            =============================
        */
  
        d_2C_2.updateOptions({
          fill: {
            type:"gradient",
            opacity: 0.9,
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: 0.1,
                stops: [100, 100]
            }
          }
        })        
        
      }
  
    })
    
    
    } catch(e) {
        console.log(e);
    }
})