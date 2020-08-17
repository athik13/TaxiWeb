/*
 *  Document   : be_pages_dashboard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Dashboard Page
 */

class pageDashboard {
    /*
     * Chart.js, for more examples you can check out http://www.chartjs.org/docs
     *
     */
    static initCharts() {
        // Set Global Chart.js configuration
        Chart.defaults.global.defaultFontColor              = '#495057';
        Chart.defaults.scale.gridLines.color                = 'transparent';
        Chart.defaults.scale.gridLines.zeroLineColor        = 'transparent';
        Chart.defaults.scale.display                        = false;
        Chart.defaults.scale.ticks.beginAtZero              = true;
        Chart.defaults.global.elements.line.borderWidth     = 0;
        Chart.defaults.global.elements.point.radius         = 0;
        Chart.defaults.global.elements.point.hoverRadius    = 0;
        Chart.defaults.global.tooltips.cornerRadius         = 3;
        Chart.defaults.global.legend.labels.boxWidth        = 12;

        // Get Chart Containers
        let chartEarningsCon  = jQuery('.js-chartjs-dashboard-earnings');
        let chartSalesCon     = jQuery('.js-chartjs-dashboard-sales');

        // Set Chart Variables
        let chartEarnings, chartEarningsOptions, chartEarningsData, chartSales, chartSalesOptions, chartSalesData;

        // Earnigns Chart Options
        chartEarningsOptions = {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMax: 3000
                    }
                }]
            },
            tooltips: {
                intersect: false,
                callbacks: {
                    label: function(tooltipItems, data) {
                        return ' $' + tooltipItems.yLabel;
                    }
                }
            }
        };

        // Earnigns Chart Options
        chartSalesOptions = {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMax: 260
                    }
                }]
            },
            tooltips: {
                intersect: false,
                callbacks: {
                    label: function(tooltipItems, data) {
                        return ' ' + tooltipItems.yLabel + ' Sales';
                    }
                }
            }
        };

        // Earnings Chart Data
        chartEarningsData = {
            labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [
                {
                    label: 'This Year',
                    fill: true,
                    backgroundColor: 'rgba(132, 94, 247, .3)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(132, 94, 247, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(132, 94, 247, 1)',
                    data: [218600, 207700, 199950, 151300, 83000, 135200, 134900, 114200, 0, 0, 0, 0]
                },
                {
                    label: 'Last Year',
                    fill: true,
                    backgroundColor: 'rgba(233, 236, 239, 1)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(233, 236, 239, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(233, 236, 239, 1)',
                    data: [157650, 160850, 161200, 159000, 189150, 201400, 212710, 217750, 224400, 227650, 221300, 226650]
                }
            ]
        };

        // Sales Chart Data
        chartSalesData = {
            labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [
                {
                    label: 'This Year',
                    fill: true,
                    backgroundColor: 'rgba(34, 184, 207, .3)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(34, 184, 207, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(34, 184, 207, 1)',
                    data: [175, 120, 169, 82, 135, 169, 132, 130, 192, 230, 215, 260]
                },
                {
                    label: 'Last Year',
                    fill: true,
                    backgroundColor: 'rgba(233, 236, 239, 1)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(233, 236, 239, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(233, 236, 239, 1)',
                    data: [220, 170, 110, 215, 168, 227, 154, 135, 210, 240, 145, 178]
                }
            ]
        };

        // Init Earnings Chart
        if (chartEarningsCon.length) {
            chartEarnings = new Chart(chartEarningsCon, {
                type: 'line',
                data: chartEarningsData,
                options: chartEarningsOptions
            });
        }

        // Init Sales Chart
        if (chartSalesCon.length) {
            chartSales = new Chart(chartSalesCon, {
                type: 'line',
                data: chartSalesData,
                options: chartSalesOptions
            });
        }
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initCharts();
    }
}

// Initialize when page loads
jQuery(() => { pageDashboard.init(); });
