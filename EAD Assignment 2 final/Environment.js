var app = angular.module("myapp", []);
app.controller("tableController", ['$scope', function ($scope) {

 $scope.sensorreadinglist = [
//              { 'Name': 'Satinder Singh', 'Gender': 'Male', 'City': 'Bombay' },
//              { 'Name': 'Leslie Mac', 'Gender': 'Female', 'City': 'Queensland' },
//              { 'Name': 'Andrea ely ', 'Gender': 'Female', 'City': 'Rio' },
//              { 'Name': 'Amit Sarna', 'Gender': 'Male', 'City': 'Navi Mumbai' },
//              { 'Name': 'David Miller', 'Gender': 'Male', 'City': 'Scouthe'}
//            ];
// }]);


	{
		"xbeeid":"B3D982A49F",
		"moteid":"crest001",
		"motelocation":"Canteen, ground floor",
		"hubname":"hubone",
		"temperature":"33.66",
		"airpressure":"1011.40",
   		"humidity":"55.23",
		"light":"180.50",
		"altitude":"28493.84",
		"mic":"392.38",
		"gas":"0135.32"
	},
	{
		"xbeeid":"B3D982358A",
		"moteid":"crest002",
		"motelocation":"Classroom Hallway, second floor",
		"hubname":"hubone",
		"temperature":"32.34",
		"airpressure":"1010.30",
   		"humidity":"56.98",
		"light":"240.50",
		"altitude":"28503.84",
		"mic":"292.38",
		"gas":"0085.32"
	},
	{
		"xbeeid":"B3D989A2DD9",
		"moteid":"crest003",
		"motelocation":"Football Field, ground floor",
		"hubname":"hubone",
		"temperature":"34.09",
		"airpressure":"1011.22",
   		"humidity":"58.30",
		"light":"280.30",
		"altitude":"28504.33",
		"mic":"085.38",
		"gas":"0038.93"
	}
];
}]);
