/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add('arraysort',function(Y){var LANG=Y.Lang,ISVALUE=LANG.isValue,ISSTRING=LANG.isString;Y.ArraySort={compare:function(a,b,desc){if(!ISVALUE(a)){if(!ISVALUE(b)){return 0;}
else{return 1;}}
else if(!ISVALUE(b)){return-1;}
if(ISSTRING(a)){a=a.toLowerCase();}
if(ISSTRING(b)){b=b.toLowerCase();}
if(a<b){return(desc)?1:-1;}
else if(a>b){return(desc)?-1:1;}
else{return 0;}}};},'3.3.0',{requires:['yui-base']});