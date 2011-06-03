dojo.provide("yourCompany.example.AccordionPane");

dojo.require("dijit.layout.AccordionContainer");

dojo.declare(
    "yourCompany.example.AccordionPane",
    [dijit.layout.AccordionPane],
    {
        postMixInProperties: function() {
            this.inherited(arguments);
            
            this.title = "Your Company: " + this.title;
        }
    }
);
