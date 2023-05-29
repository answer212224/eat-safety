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
            =================================
                Revenue Monthly | Options
            =================================
        */
        var options1 = {
          chart: {
            fontFamily: 'Nunito, sans-serif',
            height: 365,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
              enabled: true,
              opacity: 0.2,
              blur: 10,
              left: -7,
              top: 22
            },
            toolbar: {
              show: false
            },
          },
          colors: ['#e7515a', '#2196f3'],
          dataLabels: {
              enabled: false
          },
          markers: {
            discrete: [{
            seriesIndex: 0,
            dataPointIndex: 7,
            fillColor: '#000',
            strokeColor: '#000',
            size: 5
          }, {
            seriesIndex: 2,
            dataPointIndex: 11,
            fillColor: '#000',
            strokeColor: '#000',
            size: 4
          }]
          },
          subtitle: {
            text: '$10,840',
            align: 'right',
            margin: 0,
            offsetX: -170,
            offsetY: 20,
            floating: false,
            style: {
              fontSize: '18px',
              color:  '#00ab55'
            }
          },
          title: {
            text: 'Total Profit',
            align: 'right',
            margin: 0,
            offsetX: -90,
            offsetY: 20,
            floating: false,
            style: {
              fontSize: '18px',
              color:  '#bfc9d4'
            },
          },
          stroke: {
              show: true,
              curve: 'smooth',
              width: 2,
              lineCap: 'square'
          },
          series: [{
              name: 'Expenses',
              data: [16800, 16800, 15500, 14800, 15500, 17000, 21000, 16000, 15000, 17000, 14000, 17000].reverse()
          }, {
              name: 'Income',
              data: [16500, 17500, 16200, 17300, 16000, 21500, 16000, 17000, 16000, 19000, 18000, 19000].reverse()
          }],
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'].reverse(),
          xaxis: {
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            crosshairs: {
              show: true
            },
            labels: {
              offsetX: 0,
              offsetY: 5,
              style: {
                  fontSize: '12px',
                  fontFamily: 'Nunito, sans-serif',
                  cssClass: 'apexcharts-xaxis-title',
              },
            }
          },
          yaxis: {
            labels: {
              formatter: function(value, index) {
                return (value / 1000) + 'K'
              },
              offsetX: -35,
              offsetY: 0,
              style: {
                  fontSize: '12px',
                  fontFamily: 'Nunito, sans-serif',
                  cssClass: 'apexcharts-yaxis-title',
              },
            }
          },
          grid: {
            borderColor: '#191e3a',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },   
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
              top: -50,
              right: 0,
              bottom: 0,
              left: 5
            },
          }, 
          legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -60,
            fontSize: '16px',
            fontFamily: 'Quicksand, sans-serif',
            markers: {
              width: 10,
              height: 10,
              strokeWidth: 0,
              strokeColor: '#fff',
              fillColors: undefined,
              radius: 12,
              onClick: undefined,
              offsetX: -5,
              offsetY: 0
            },    
            itemMargin: {
              horizontal: 10,
              vertical: 20
            }
            
          },
          tooltip: {
            theme: Theme,
            marker: {
              show: true,
            },
            x: {
              show: false,
            }
          },
          fill: {
              type:"gradient",
              gradient: {
                  type: "vertical",
                  shadeIntensity: 1,
                  inverseColors: !1,
                  opacityFrom: .19,
                  opacityTo: .05,
                  stops: [100, 100]
              }
          },
          responsive: [{
            breakpoint: 575,
            options: {
              legend: {
                  offsetY: -50,
              },
            },
          }]
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
            =================================
                Revenue Monthly | Options
            =================================
        */
        var options1 = {
          chart: {
            fontFamily: 'Nunito, sans-serif',
            height: 365,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
              enabled: true,
              opacity: 0.2,
              blur: 10,
              left: -7,
              top: 22
            },
            toolbar: {
              show: false
            },
          },
          colors: ['#1b55e2', '#e7515a'],
          dataLabels: {
              enabled: false
          },
          markers: {
            discrete: [{
            seriesIndex: 0,
            dataPointIndex: 7,
            fillColor: '#000',
            strokeColor: '#000',
            size: 5
          }, {
            seriesIndex: 2,
            dataPointIndex: 11,
            fillColor: '#000',
            strokeColor: '#000',
            size: 4
          }]
          },
          subtitle: {
            text: '$10,840',
            align: 'right',
            margin: 0,
            offsetX: -170,
            offsetY: 20,
            floating: false,
            style: {
              fontSize: '18px',
              color:  '#4361ee'
            }
          },
          title: {
            text: 'Total Profit',
            align: 'right',
            margin: 0,
            offsetX: -90,
            offsetY: 20,
            floating: false,
            style: {
              fontSize: '18px',
              color:  '#0e1726'
            },
          },
          stroke: {
              show: true,
              curve: 'smooth',
              width: 2,
              lineCap: 'square'
          },
          series: [{
              name: 'Expenses',
              data: [16800, 16800, 15500, 14800, 15500, 17000, 21000, 16000, 15000, 17000, 14000, 17000].reverse()
          }, {
              name: 'Income',
              data: [16500, 17500, 16200, 17300, 16000, 21500, 16000, 17000, 16000, 19000, 18000, 19000].reverse()
          }],
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'].reverse(),
          xaxis: {
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            crosshairs: {
              show: true
            },
            labels: {
              offsetX: 0,
              offsetY: 5,
              style: {
                  fontSize: '12px',
                  fontFamily: 'Nunito, sans-serif',
                  cssClass: 'apexcharts-xaxis-title',
              },
            }
          },
          yaxis: {
            labels: {
              formatter: function(value, index) {
                return (value / 1000) + 'K'
              },
              offsetX: -35,
              offsetY: 0,
              style: {
                  fontSize: '12px',
                  fontFamily: 'Nunito, sans-serif',
                  cssClass: 'apexcharts-yaxis-title',
              },
            }
          },
          grid: {
            borderColor: '#e0e6ed',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },   
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
              top: -50,
              right: 0,
              bottom: 0,
              left: 5
            },
          }, 
          legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -50,
            fontSize: '16px',
            fontFamily: 'Quicksand, sans-serif',
            markers: {
              width: 10,
              height: 10,
              strokeWidth: 0,
              strokeColor: '#fff',
              fillColors: undefined,
              radius: 12,
              onClick: undefined,
              offsetX: -5,
              offsetY: 0
            },    
            itemMargin: {
              horizontal: 10,
              vertical: 20
            }
            
          },
          tooltip: {
            theme: Theme,
            marker: {
              show: true,
            },
            x: {
              show: false,
            }
          },
          fill: {
              type:"gradient",
              gradient: {
                  type: "vertical",
                  shadeIntensity: 1,
                  inverseColors: !1,
                  opacityFrom: .19,
                  opacityTo: .05,
                  stops: [100, 100]
              }
          },
          responsive: [{
            breakpoint: 575,
            options: {
              legend: {
                  offsetY: -50,
              },
            },
          }]
        }

      }
      
    
    /**
        ==============================
        |    @Render Charts Script    |
        ==============================
    */
    
    /*
        ================================
            Revenue Monthly | Render
        ================================
    */
    var chart1 = new ApexCharts(
        document.querySelector("#revenueMonthly"),
        options1
    );
    
    chart1.render();
    
  
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
        =================================
            Revenue Monthly | Options
        =================================
      */
  
        chart1.updateOptions({
          colors: ['#e7515a', '#2196f3'],
          subtitle: {
            style: {
              color:  '#00ab55'
            }
          },
          title: {
            style: {
              color:  '#bfc9d4'
            }
          },
          grid: {
            borderColor: '#191e3a',
          }
        })
  
      } else {
  
        /*
        =================================
            Revenue Monthly | Options
        =================================
      */
  
        chart1.updateOptions({
          colors: ['#1b55e2', '#e7515a'],
          subtitle: {
            style: {
              color:  '#4361ee'
            }
          },
          title: {
            style: {
              color:  '#0e1726'
            }
          },
          grid: {
            borderColor: '#e0e6ed',
          }
        })
        
      }
  
    })
    
    
    } catch(e) {
        console.log(e);
    }
})