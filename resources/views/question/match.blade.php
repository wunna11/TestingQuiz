<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-row min-h-screen justify-center items-center">
        <div class="space-y-12 py-20">
            <h1>Hello Match</h1>
            <form action="{{ route('correct-match.store', $id) }}" method="POST">
                @csrf
                <div>
                    @foreach ($left_options as $left_option)
                        <div class="flex">
                            <div>
                                <p>{{ $left_option->text }}</p>
                                <input type="text" name="left_options[]" value="{{ $left_option->id }}" hidden />
                            </div>
                            <div>
                                <select name="right_options[]" id="" class="form-control">
                                    @foreach ($right_options as $right_option)
                                        <option value="{{ $right_option->id }}">
                                            {{ $right_option->text }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endforeach
                </div>

                <input type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" />
            </form>
        </div>
    </div>
</body>

</html>
