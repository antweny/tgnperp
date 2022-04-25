<figure class="highcharts-figure">
    <div id="ministry"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($mini[0]) !!}

        Highcharts.chart('ministry', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Ministers',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$mini[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#42EADDFF','#CDB599FF'],
                    dataLabels: {
                        enabled:true,
                        format:'<b>{point.name}</b><br>{point.percentage:.2f} %',
                        distance: -50,
                    },
                },
            },
            series: [{
                name: 'Number',
                colorByPoint: true,
                data: datas
            }],
        });
    </script>
@endpush
