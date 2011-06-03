dojo.provide("yourCompany.example.ComboBox");

dojo.require("dijit.form.ComboBox");

dojo.declare(
    "yourCompany.example.ComboBox",
    [dijit.form.ComboBox],
    {
    
        startup: function() {
            this.inherited(arguments);
            dojo.connect(this.domNode, "onclick", function() {
                dojo.byId('pasteBox').innerHTML += 'This text added by your custom combo box!<br />';
            });
        }
    
    }
);
