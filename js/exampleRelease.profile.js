dependencies ={
    layers:  [
        {
	        name: "../yourCompany/example/exampleRelease.js",
	        dependencies: [
                // Because all the deps are in a single file, just depend on that file
				"yourCompany.example.ExampleApp"
			]
        }
    ],
    prefixes: [
		[ "dijit", "../dijit" ],
		[ "yourCompany", "../../yourCompany"]
    ]
};
