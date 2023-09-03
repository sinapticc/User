var getCitiesRoute = '/get-cities';

function updateCityOptions(citySelectId, provinceId) {
    var citySelect = document.getElementById(citySelectId);
    citySelect.innerHTML = '';

    var defaultOption = document.createElement('option');
    defaultOption.value = '0';
    defaultOption.textContent = 'شهر را انتخاب کنید';
    citySelect.appendChild(defaultOption);

    if (provinceId !== '0') {
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
