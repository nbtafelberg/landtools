# landtools
This is the land tools PHP script to work with Opensim NGC (latest version)

Change the database.php with your settings

You'll need the moneyserver running somewhere as well and these files running on a php/webserver, you may have to install extra packages to do the rpc stuff.

In  your Economy section of OpenSim.ini

<code>
        EconomyModule = DTLNSLMoneyModule    
        CurrencySymbol = "WT$"
        CurrencyServer = " your currency server URL http://yourserver.com:8009/ etc "
        EconomyHelper = " these files e.g. http://yourserver.com/";


</code>



With love from Lone Wolf at Wolf Territories Grid
https://grid.wolfterritories.org
