  const getName = () => {
    return 'Jim';
  };

  const getLocation = () => {
    return 'Dhaka';
  };

  const axiostest = () =>{
        axios.get('https://api.github.com/users/mapbox')
    .then((response) => {
        return response.data;
    })
    .catch((err)=>{
          return err;
    });

  }

  const dateOfBirth = '12.01.1982';

  exports.getName = getName;
  exports.getLocation = getLocation;
  exports.axiostest = axiostest;
  exports.dob = dateOfBirth;
