Ext.onReady(function() {
    MODx.load({ xtype: 'jevix-page-home'});
});

Jevix.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'jevix-panel-home'
            ,renderTo: 'jevix-panel-home-div'
        }]
    }); 
    Jevix.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(Jevix.page.Home,MODx.Component);
Ext.reg('jevix-page-home',Jevix.page.Home);