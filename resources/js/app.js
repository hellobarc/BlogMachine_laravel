require('./bootstrap');
const {getName,getLocation,dob,axiostest} = require('./services/HomeContent');


console.log(
  `${getName()} lives in ${getLocation()} and was born on ${dob}.`
);


console.log(axiostest());
// console.log(axios);


// axios.get('https://api.github.com/users/mapbox')
//   .then((response) => {
//     console.log(response.data);
//   })
//   .catch((err)=>{
//         console.log(err);
//   });
