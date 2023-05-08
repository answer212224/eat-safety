/** 
 * 
 * Widget Six
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
          ======================================
              Visitor Statistics | Options
          ======================================
        */
        
        
        // Total Visits
        
        var spark1 = {
          chart: {
              id: 'unique-visits',
              group: 'sparks2',
              type: 'line',
              height: 80,
              sparkline: {
                  enabled: true
              },
              dropShadow: {
                  enabled: true,
                  top: 1,
                  left: 1,
                  blur: 2,
                  color: '#e2a03f',
                  opacity: 0.7,
              }
          },
          series: [{
              data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25].reverse()
          }],
          stroke: {
            curve: 'smooth',
            width: 2,
          },
          markers: {
              size: 0
          },
          grid: {
            padding: {
              top: 35,
              bottom: 0,
              left: 40
            }
          },
          colors: ['#e2a03f'],
          tooltip: {
              x: {
                  show: false
              },
              y: {
                  title: {
                      formatter: function formatter(val) {
                          return '';
                      }
                  }
              }
          },
          responsive: [{
              breakpoint: 1351,
              options: {
                chart: {
                    height: 95,
                },
                grid: {
                    padding: {
                      top: 35,
                      bottom: 0,
                      left: 0
                    }
                },
              },
          },
          {
              breakpoint: 1200,
              options: {
                chart: {
                    height: 80,
                },
                grid: {
                    padding: {
                      top: 35,
                      bottom: 0,
                      left: 40
                    }
                },
              },
          },
          {
              breakpoint: 576,
              options: {
                chart: {
                    height: 95,
                },
                grid: {
                    padding: {
                      top: 45,
                      bottom: 0,
                      left: 0
                    }
                },
              },
          }
          
          ]
        }
        
        // Paid Visits
        
        var spark2 = {
        chart: {
          id: 'total-users',
          group: 'sparks1',
          type: 'line',
          height: 80,
          sparkline: {
            enabled: true
          },
          dropShadow: {
            enabled: true,
            top: 3,
            left: 1,
            blur: 3,
            color: '#009688',
            opacity: 0.7,
          }
        },
        series: [{
          data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69].reverse()
        }],
        stroke: {
          curve: 'smooth',
          width: 2,
        },
        markers: {
          size: 0
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 40
          }
        },
        colors: ['#009688'],
        tooltip: {
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function formatter(val) {
                return '';
              }
            }
          }
        },
        responsive: [{
            breakpoint: 1351,
            options: {
              chart: {
                  height: 95,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 0
                  }
              },
            },
        },
        {
            breakpoint: 1200,
            options: {
              chart: {
                  height: 80,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 40
                  }
              },
            },
        },
        {
            breakpoint: 576,
            options: {
              chart: {
                  height: 95,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 0
                  }
              },
            },
        }
        ]
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
          ======================================
              Visitor Statistics | Options
          ======================================
        */
        
        
        // Total Visits
        
        var spark1 = {
          chart: {
              id: 'unique-visits',
              group: 'sparks2',
              type: 'line',
              height: 80,
              sparkline: {
                  enabled: true
              },
              dropShadow: {
                  enabled: true,
                  top: 1,
                  left: 1,
                  blur: 2,
                  color: '#e2a03f',
                  opacity: 0.7,
              }
          },
          series: [{
              data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25].reverse()
          }],
          stroke: {
            curve: 'smooth',
            width: 2,
          },
          markers: {
              size: 0
          },
          grid: {
            padding: {
              top: 35,
              bottom: 0,
              left: 40
            }
          },
          colors: ['#e2a03f'],
          tooltip: {
              x: {
                  show: false
              },
              y: {
                  title: {
                      formatter: function formatter(val) {
                          return '';
                      }
                  }
              }
          },
          responsive: [{
              breakpoint: 1351,
              options: {
                chart: {
                    height: 95,
                },
                grid: {
                    padding: {
                      top: 35,
                      bottom: 0,
                      left: 0
                    }
                },
              },
          },
          {
              breakpoint: 1200,
              options: {
                chart: {
                    height: 80,
                },
                grid: {
                    padding: {
                      top: 35,
                      bottom: 0,
                      left: 40
                    }
                },
              },
          },
          {
              breakpoint: 576,
              options: {
                chart: {
                    height: 95,
                },
                grid: {
                    padding: {
                      top: 45,
                      bottom: 0,
                      left: 0
                    }
                },
              },
          }
          
          ]
        }
        
        // Paid Visits
        
        var spark2 = {
        chart: {
          id: 'total-users',
          group: 'sparks1',
          type: 'line',
          height: 80,
          sparkline: {
            enabled: true
          },
          dropShadow: {
            enabled: true,
            top: 3,
            left: 1,
            blur: 3,
            color: '#009688',
            opacity: 0.7,
          }
        },
        series: [{
          data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69].reverse()
        }],
        stroke: {
          curve: 'smooth',
          width: 2,
        },
        markers: {
          size: 0
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 40
          }
        },
        colors: ['#009688'],
        tooltip: {
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function formatter(val) {
                return '';
              }
            }
          }
        },
        responsive: [{
            breakpoint: 1351,
            options: {
              chart: {
                  height: 95,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 0
                  }
              },
            },
        },
        {
            breakpoint: 1200,
            options: {
              chart: {
                  height: 80,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 40
                  }
              },
            },
        },
        {
            breakpoint: 576,
            options: {
              chart: {
                  height: 95,
              },
              grid: {
                  padding: {
                    top: 35,
                    bottom: 0,
                    left: 0
                  }
              },
            },
        }
        ]
        }
  
      }
        
        /**
            ==============================
            |    @Render Charts Script    |
            ==============================
        */
  
  
        /*
            ======================================
                Visitor Statistics | Script
            ======================================
        */
  
        // Total Visits
        let d_1C_1 = new ApexCharts(document.querySelector("#total-users"), spark1);
        d_1C_1.render();
  
        // Paid Visits
        let d_1C_2 = new ApexCharts(document.querySelector("#paid-visits"), spark2);
        d_1C_2.render();
  
  
    } catch(e) {
      // statements
      console.log(e);
    }
})