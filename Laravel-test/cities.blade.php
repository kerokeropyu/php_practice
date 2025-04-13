<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['title'] }}</title>
    <style>
        .city-list { margin: 20px; }
        .city-item { padding: 10px; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>{{ $data['title'] }}</h1>

    <form id="search-form" onsubmit="event.preventDefault(); fetchData()">
        <label for="name">都市名:</label>
        <input type="text" id="name" name="name" placeholder="都市名">
        <br>
        <label for="prefecture">都道府県:</label>
        <input type="text" id="prefecture" name="prefecture" placeholder="都道府県">
        <br>
        <label for="region">地域:</label>
        <input type="text" id="region" name="region" placeholder="地域">
        <br>
        <button type="submit">検索</button>
    </form>

    <div class="city-list">
        @foreach ($data['cities'] as $city)
            <div class="city-item">
                {{ $city['id'] }}. {{ $city['name'] }}
            </div>
        @endforeach
    </div>

    <div id="api-result"></div>

    <script>
    function fetchData() {
        const name = document.getElementById('name').value;
        const prefecture = document.getElementById('prefecture').value;
        const region = document.getElementById('region').value;

        const params = new URLSearchParams();
        if (name) params.set('name', name);
        if (prefecture) params.set('prefecture', prefecture);
        if (region) params.set('region', region);

        const url = `/api/data?${params.toString()}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                document.getElementById('api-result').innerHTML = 
                    JSON.stringify(data, null, 2);
            });
    }
    </script>
</body>
</html>
