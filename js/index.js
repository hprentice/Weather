const startWeatherApp = async () => {
    navigator.geolocation.getCurrentPosition(getCoords)
}

const getCoords = async position => {
    const lat = position.coords.latitude
    const lon = position.coords.longitude

    //console.log(lat)
    //console.log(lon)

    setCoords(lat, lon)
}

const setCoords = async (lat, lon) => {
    //GET KEY FROM https://www.weatherapi.com/
    //let key = "YOUR KEY HERE"

    const url = "http://api.weatherapi.com/v1/current.json?key="+ key +"&q=" + lat + "," + lon + "&aqi=no"
    
    //console.log(url)

    const response = await fetch(url);
    const data = await response.json(response);

    //console.log(data.location.region)

    let town = data.location.name
    let county = data.location.region
    let condition = data.current.condition.text
    let icon = data.current.condition.icon
    let temp = data.current.temp_c

    formatWeatherInfo(town, county, condition, icon, temp)
}

const formatWeatherInfo = async (town, county, condition, icon, temp) => {
    //console.log(town + county + condition + icon + temp)

    let elementTown = document.getElementById("town")
    let elementCondition = document.getElementById("condition")
    let elementIcon = document.getElementById("icon")
    let elementTemp = document.getElementById("temp")

    let hiddenCity = document.getElementById("hidden_city")
    let hiddenTemp = document.getElementById("hidden_temp")

    elementTown.innerHTML = "Town: " + town + ", " + county
    elementCondition.innerHTML = condition
    elementIcon.innerHTML = "<img src='https:" + icon + "' alt='icon'/>"
    elementTemp.innerHTML = temp + "&deg;C"

    hiddenCity.value = town
    hiddenTemp.value = temp
}

startWeatherApp();
