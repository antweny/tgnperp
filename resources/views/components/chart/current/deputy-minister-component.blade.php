<figure class="highcharts-figure">
    <div id="deputyMinistry"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($depmin[0]) !!}

        Highcharts.chart('deputyMinistry', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Deputy Ministers',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                },
                margin:0
            },
            subtitle: {
                text: 'Total Number {{$depmin[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: ['#2C5F2D','#97BC62FF'],
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f}%',
                        distance: -50,
                        filter: {
                            property: 'percentage',
                            operator: '>',
                            value: 4
                        }
                    }
                }
            },
            series: [{
                name: 'Number',
                colorByPoint: true,
                data: datas
            }]
        });
    </script>
@endpush
