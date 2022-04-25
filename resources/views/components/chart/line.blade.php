<script>
    var datas = {!! json_encode($ministry) !!}

    Highcharts.chart('ministry',{
        title: {
            text:'Minister Representation'
        },
        xAxis:{
            title:{
                text:'Gender'
            },
            categories:['Male','Female']
        },
        legend:{
            layout:'vertical',
            align:'right',
            verticalAlign:'middle'
        },
        plotOptions:{
            series:{
                allowPointSelect: true,
            }
        },
        series:[{
            name:'Number',
            data:datas
        }],
        responsive:{
            rules: [
                {
                    condition:{
                        maxWidth:500
                    },
                    chartOptions: {
                        legend:{
                            layout:'horizontal',
                            align: 'center',
                            verticalAlign:'bottom'
                        }
                    }
                }
            ]
        }
    })
</script>
