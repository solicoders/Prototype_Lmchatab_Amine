<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css') }}
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Discuss</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <!-- font awesome -->

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            {{-- nav --}}
            @include('layouts.nav')
            {{-- end nav --}}


            {{-- aside --}}
            @include('layouts.aside')
            {{-- end aside --}}

            {{-- content --}}
            <div class="content-wrapper" style="min-height: 1302.4px;">
                @yield('content')
            </div>
            {{--  end content --}}


            {{-- footer --}}
            @include('layouts.footer')
            {{-- end footer --}}
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

{{--
    <script>
        function submitForm() {
            document.getElementById("importForm").submit();
        }

        function updateUrl() {
            var selectedProjectId = document.getElementById('project').value;
            var url = '/' + selectedProjectId;
            window.location.href = url;
        }
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('keyup', '#searchTask', function(e) {
                e.preventDefault();
                let project = document.getElementById('project').value;
                let search = $(this).val();
                console.log(search);
                // let page = $('.pagination').find('.active').text(); // Get the current active page
                $.ajax({
                    url: '{{ route('search.task', ['project' => ':project']) }}'.replace(':project',
                        project),
                    method: 'GET',
                    data: {
                        search: search,
                        project: project,
                    },
                    success: function(data) {
                        $('.table-tasks').html(data.table);
                        $('.pagination').html(data.pagination);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script> --}}



</html>

