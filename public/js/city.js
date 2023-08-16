var getCitiesRoute = '/get-cities';
function updateCityOptions(provinceId) {
    var citySelect = document.getElementById('city');
    citySelect.innerHTML = ''; // خالی کردن لیست شهرها

    if (provinceId !== '0') {
        // ارسال درخواست به سرور
        var xhr = new XMLHttpRequest();
        xhr.open('GET', getCitiesRoute + '/' + provinceId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var cities = JSON.parse(xhr.responseText);
                cities.forEach(function(city) {
                    var option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            }
        };
        xhr.send();
    }
}
