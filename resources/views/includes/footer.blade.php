
    <footer class="footer mt-5">
        <div class="container">
            <p class="my-3">© CRM 2020</p>
        </div>
    </footer>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    @if (request()->is('/'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(function () {
        //линейный график
        if (document.getElementById("sample-chart")) {
            new Chart(document.getElementById("sample-chart"), {
                type : "line",
                data: {
                    labels: {!! $linear_labels !!},
                    datasets:[{
                        label: "Сумма платежа, руб",
                        data: {!! $linear_values !!},
                        fill: false,
                        borderColor: "rgb(75, 192, 192)",
                        lineTension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    aspectRatio: 1.5
                }
            });
        }


        //график распределения
        if (document.getElementById("sample-chart-2")) {
            new Chart(document.getElementById("sample-chart-2"), {
                type : "doughnut",
                data: {
                    labels: {!! $pie_labels !!},
                    datasets:[{
                        label: "Сумма платежа, руб",
                        data: {!! $linear_values !!},
                        backgroundColor: [
                            "rgb(255, 99, 132)",
                            "rgb(54, 162, 235)",
                            "rgb(255, 205, 86)",
                            'rgba(75, 192, 192)',
                            'rgba(153, 102, 255)',
                            'rgba(255, 159, 64)',
                            'rgba(145, 30, 164)',
                            "rgb(15, 225, 86)",
                            'rgba(175, 219, 192)',
                            'rgba(53, 12, 255)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    aspectRatio: 1.5,
                    animation: {
                        animateScale: true
                    },
                    legend: {
                        position: "bottom"
                    }
                }
            });
        }
    })
    </script>
    @endif
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
