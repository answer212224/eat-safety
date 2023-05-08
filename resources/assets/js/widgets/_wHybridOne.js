/** 
 * 
 * Widget Hybrid One
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
          ==============================
              Statistics | Options
          ==============================
        */
        
        // Followers
        
        var d_1options3 = {
        chart: {
          id: 'sparkline1',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        series: [{
          name: 'Sales',
          data: [38, 60, 38, 52, 36, 40, 28 ]
        }],
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        yaxis: {
          min: 0
        },
        colors: ['#4361ee'],
        tooltip: {
          x: {
            show: false,
          }
        },
        grid: {
            show: false,
            xaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
            top: 5,
            right: 0,
            left: 0
            }, 
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
        }
        }
        
        // Referral
        
        var d_1options4 = {
        chart: {
          id: 'sparkline1',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        series: [{
          name: 'Sales',
          data: [ 60, 28, 52, 38, 40, 36, 38]
        }],
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        yaxis: {
          min: 0
        },
        colors: ['#e7515a'],
        tooltip: {
          x: {
            show: false,
          }
        },
        grid: {
            show: false,
            xaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
            top: 5,
            right: 0,
            left: 0
            }, 
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
        }
        }
        
        // Engagement Rate
        
        var d_1options5 = {
          chart: {
            id: 'sparkline1',
            type: 'area',
            height: 160,
            sparkline: {
              enabled: true
            },
          },
          stroke: {
              curve: 'smooth',
              width: 2,
          },
          fill: {
            opacity: 1,
          },
          series: [{
            name: 'Sales',
            data: [28, 50, 36, 60, 38, 52, 38 ]
          }],
          labels: ['1', '2', '3', '4', '5', '6', '7'],
          yaxis: {
            min: 0
          },
          colors: ['#00ab55'],
          tooltip: {
            x: {
              show: false,
            }
          },
          grid: {
              show: false,
              xaxis: {
                  lines: {
                      show: false
                  }
              },
              padding: {
              top: 5,
              right: 0,
              left: 0
              }, 
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
          }
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
          ==============================
              Statistics | Options
          ==============================
        */
        
        // Followers
        
        var d_1options3 = {
        chart: {
          id: 'sparkline1',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        series: [{
          name: 'Sales',
          data: [38, 60, 38, 52, 36, 40, 28 ]
        }],
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        yaxis: {
          min: 0
        },
        colors: ['#4361ee'],
        tooltip: {
          x: {
            show: false,
          }
        },
        grid: {
            show: false,
            xaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
            top: 5,
            right: 0,
            left: 0
            }, 
        },
        fill: {
          type:"gradient",
          gradient: {
              type: "vertical",
              shadeIntensity: 1,
              inverseColors: !1,
              opacityFrom: .40,
              opacityTo: .05,
              stops: [100, 100]
          }
        }
        }
        
        // Referral
        
        var d_1options4 = {
        chart: {
          id: 'sparkline1',
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        series: [{
          name: 'Sales',
          data: [ 60, 28, 52, 38, 40, 36, 38]
        }],
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        yaxis: {
          min: 0
        },
        colors: ['#e7515a'],
        tooltip: {
          x: {
            show: false,
          }
        },
        grid: {
            show: false,
            xaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
            top: 5,
            right: 0,
            left: 0
            }, 
        },
        fill: {
          type:"gradient",
          gradient: {
              type: "vertical",
              shadeIntensity: 1,
              inverseColors: !1,
              opacityFrom: .40,
              opacityTo: .05,
              stops: [100, 100]
          }
        }
        }
        
        // Engagement Rate
        
        var d_1options5 = {
          chart: {
            id: 'sparkline1',
            type: 'area',
            height: 160,
            sparkline: {
              enabled: true
            },
          },
          stroke: {
              curve: 'smooth',
              width: 2,
          },
          fill: {
            opacity: 1,
          },
          series: [{
            name: 'Sales',
            data: [28, 50, 36, 60, 38, 52, 38 ]
          }],
          labels: ['1', '2', '3', '4', '5', '6', '7'],
          yaxis: {
            min: 0
          },
          colors: ['#00ab55'],
          tooltip: {
            x: {
              show: false,
            }
          },
          grid: {
              show: false,
              xaxis: {
                  lines: {
                      show: false
                  }
              },
              padding: {
              top: 5,
              right: 0,
              left: 0
              }, 
          },
          fill: {
            type:"gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .40,
                opacityTo: .05,
                stops: [100, 100]
            }
          }
        }
  
      }
        
        /**
            ==============================
            |    @Render Charts Script    |
            ==============================
        */
  
        /*
            ==============================
                Statistics | Script
            ==============================
        */
  
  
        // Followers
  
        let d_1C_5 = new ApexCharts(document.querySelector("#hybrid_followers"), d_1options3);
        d_1C_5.render()
  
        // Referral
  
        let d_1C_6 = new ApexCharts(document.querySelector("#hybrid_followers1"), d_1options4);
        d_1C_6.render()
  
        // Engagement Rate
  
        let d_1C_7 = new ApexCharts(document.querySelector("#hybrid_followers3"), d_1options5);
        d_1C_7.render()
  
  
      /**
       * =================================================================================================
       * |     @Re_Render | Re render all the necessary JS when clicked to switch/toggle theme           |
       * =================================================================================================
       */
  
      document.querySelector('.theme-toggle').addEventListener('click', function() {
  
        let getcorkThemeObject = sessionStorage.getItem("theme");
        let getParseObject = JSON.parse(getcorkThemeObject)
        let ParsedObject = getParseObject;
  
        // console.log(ParsedObject.settings.layout.darkMode)
  
        if (ParsedObject.settings.layout.darkMode) {
  
             /*
                ==============================
                |    @Re-Render Charts Script    |
                ==============================
            */
            
            /*
                ==============================
                    Statistics | Script
                ==============================
            */
        
        
            // Followers
  
            d_1C_5.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .30,
                    }
                }
            })
        
            // Referral
  
            d_1C_6.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .30,
                    }
                }
            })
        
            // Engagement Rate
  
            d_1C_7.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .30,
                    }
                }
            })
            
        } else {
            
            /*
                ==============================
                |    @Re-Render Charts Script    |
                ==============================
            */
           
            /*
                ==============================
                    Statistics | Script
                ==============================
            */
        
        
            // Followers
  
            d_1C_5.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .40,
                    }
                }
            })
        
            // Referral
  
            d_1C_6.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .40,
                    }
                }
            })
        
            // Engagement Rate
  
            d_1C_7.updateOptions({
                fill: {
                    type:"gradient",
                    gradient: {
                        opacityFrom: .40,
                    }
                }
            })
  
        }
       
    })
  
  
    } catch(e) {
      // statements
      console.log(e);
    }
})