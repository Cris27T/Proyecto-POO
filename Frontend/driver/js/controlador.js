function obtenerDrivers(){
    axios({
        url:'../../Backend/api/driver.php',
        method: 'get',
        responseType: 'json'
    }).then(res=>{
        console.log(res);
    }).catch(error=>{
        console.error(error);
    })
}

obtenerDrivers();