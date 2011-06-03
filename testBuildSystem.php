<?php 
    // First, find out if we're in development or deployment. If you were doing this for real you'd probably want a better way of doing this :)
    $host =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $isDeployment = true;
    if($host === 'localhost') {
        $isDeployment = false;
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Dojo Buildsystem Test</title>
        
        <link rel="stylesheet" href="js/dojo-1.6/dijit/themes/claro/claro.css" />
        <style type="text/css">
            html, body, .container {
                width: 100%;    /* make the body expand to fill the visible window */
                height: 100%;
                overflow: hidden;    /* erase window level scrollbars */
                padding: 0 0 0 0;
                margin: 0 0 0 0;
                font: 10pt Arial,Myriad,Tahoma,Verdana,sans-serif;
            }
            
            .header {
                text-align: center;
            }
            
            .rightHandAccordion {
                width: 200px;
            }
            
            .navMenuContainer {

            }
            
            .footer {
                text-align: right;
            }
            
        </style>

        <?php if($isDeployment) { ?>
            <script type="text/javascript" src="js/dojo-ourRelease/dojo/dojo.js" djConfig="isDebug: false, parseOnLoad: true"></script>
            <script type="text/javascript" src="js/dojo-ourRelease/yourCompany/example/exampleRelease.js"</script>
            <script type="text/javascript" src="js/dojo-ourRelease/dijit/dijit.js"></script>
        <?php } else { ?>
            <script type="text/javascript" src="js/dojo-1.6/dojo/dojo.js" djConfig="isDebug: true, parseOnLoad: true, modulePaths:{'yourCompany': '../../yourCompany' }"></script>
        <?php } ?>

        <script type="text/javascript">
            dojo.require("dijit.Menu");

            dojo.require("dijit.form.Button");
            dojo.require("dijit.form.Form");

            dojo.require("dijit.layout.BorderContainer");
            dojo.require("dijit.layout.ContentPane");
            dojo.require("dijit.layout.AccordionContainer");
            
            dojo.require("dojo.data.ItemFileReadStore");
            
            dojo.require("yourCompany.example.AccordionPane");
            dojo.require("yourCompany.example.ComboBox");
            
        </script>
    </head>
    <body class="claro">
        <div dojoType="dijit.layout.BorderContainer" class="container" gutters="true">
            <div dojoType="dijit.layout.ContentPane" region="top" class="header">
                <h2>Dojo Buildsystem Test</h2>
            </div>
            
            <div class="navMenuContainer" dojoType="dijit.layout.ContentPane" region="left">
                <div dojoType="dijit.Menu" id="navMenu">
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCut"
                    onClick="alert('drama!')">
                        Drama
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCopy"
                    onClick="alert('comedy!')">
                        Comedy
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconPaste"
                    onClick="alert('romance!')">
                        Romance
                    </div>
                    <div dojoType="dijit.MenuSeparator">
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCut"
                    onClick="alert('drama!')">
                        Drama
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCopy"
                    onClick="alert('comedy!')">
                        Comedy
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconPaste"
                    onClick="alert('romance!')">
                        Romance
                    </div>
                    <div dojoType="dijit.MenuSeparator">
                    </div>
                    <div dojoType="dijit.PopupMenuItem">
                        <span>
                            Action
                        </span>
                        <div dojoType="dijit.Menu" id="submenu2">
                            <div dojoType="dijit.MenuItem" onClick="alert('diehard!')">
                                Diehard
                            </div>
                            <div dojoType="dijit.MenuItem" onClick="alert('indiana!')">
                                Indiana Jones
                            </div>
                        </div>
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCut"
                    onClick="alert('drama!')">
                        Drama
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconCopy"
                    onClick="alert('comedy!')">
                        Comedy
                    </div>
                    <div dojoType="dijit.MenuItem" iconClass="dijitEditorIcon dijitEditorIconPaste"
                    onClick="alert('romance!')">
                        Romance
                    </div>
                    <div dojoType="dijit.MenuSeparator">
                    </div>
                    <div dojoType="dijit.PopupMenuItem">
                        <span>
                            Action
                        </span>
                        <div dojoType="dijit.Menu" id="submenu3">
                            <div dojoType="dijit.MenuItem" onClick="alert('diehard!')">
                                Diehard
                            </div>
                            <div dojoType="dijit.MenuItem" onClick="alert('indiana!')">
                                Indiana Jones
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div dojoType="dijit.layout.ContentPane" region="center">
                <div dojoType="dijit.form.Form">
                    <h3>This is a sample form</h3>
                    <div dojoType="dojo.data.ItemFileReadStore" jsId="stateStore" url="js/data/states.json"></div>
                    <label>Chose State: </label><input dojoType="yourCompany.example.ComboBox" value="Kentucky" store="stateStore"
                        searchAttr="name" name="state" id="stateInput">
                        <button dojoType="dijit.form.Button" label="Save..." iconClass="dijitEditorIcon dijitEditorIconSave"></button>
                    <div id="pasteBox"></div>
                </div>
            </div>
            
            <div dojoType="dijit.layout.ContentPane" region="right">
                <div class="rightHandAccordion" dojoType="dijit.layout.AccordionContainer">
                    <div dojoType="yourCompany.example.AccordionPane" title="Title One">
                        <div dojoType="dijit.layout.ContentPane">
                            Hi!
                        </div>
                    </div>
                    <div dojoType="yourCompany.example.AccordionPane" title="Title Two" selected="true">
                        <div dojoType="dijit.layout.ContentPane">
                            Hi how are you?
                        </div>
                    </div>
                    <div dojoType="yourCompany.example.AccordionPane" title="Title Three">
                        <div dojoType="dijit.layout.ContentPane">
                            Hi how are you? .....Great, thx
                        </div>
                    </div>
                </div>
            </div>
            
            <div dojoType="dijit.layout.ContentPane" region="bottom" class="footer">
                This is where the copyright information usually goes
            </div>
            
        </div>
        
        <script type="text/javascript">
            dojo.addOnLoad(function() {

            });
            
        </script>
    </body>
    
</html>
