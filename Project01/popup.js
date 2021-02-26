// Copyright 2018 The Chromium Authors. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
//Author: Haydar Mehryar
'use strict';

let changeColor = document.getElementById('changeColor');



function setLastTimeStr(timeStr) {
    console.log("last time is going to be set as:"+ timeStr);
    chrome.storage.sync.set({ 'lastTimeStr': timeStr }, function () {
        console.log("Last Time is set");
    })
}

function getDateObject(datestr) {
    var parts = datestr.split(',');

    var dateparts = parts[0].split('-');
    var day = dateparts[0];
    var month = parseInt(dateparts[1]) - 1;
    var year = dateparts[2];


    var timeparts = parts[1].split(':');
    var hh = timeparts[0];
    var mm = timeparts[1];
    var ss = timeparts[2];
    var date = new Date(0, 0, 0, hh, mm, ss, 0);
    return date;
}
function gettimediffViaSeconds(t1, t2) {
    var t1val = Number(t1.getHours() * 3600 + t1.getMinutes() * 60 + t1.getSeconds());
    var t2val = Number(t2.getHours() * 3600 + t2.getMinutes() * 60 + t2.getSeconds());
    var secDiff = Math.floor((t2 - t1)/1000);
    console.log(secDiff);
    var hours = Math.floor(secDiff / 3600);
    var mins = Math.floor((secDiff % 3600) / 60);
    var secs = (secDiff % 3600) % 60;

    return (hours + ':' + mins + ':' + secs);
}
function gettimediff(t1, t2) {
    var t1val = Number(t1.getHours() * 60 + t1.getMinutes());
    var t2val = Number(t2.getHours() * 60 + t2.getMinutes());
    var min = Math.floor((t2val - t1val) % 60);
    var hours = parseInt((t2 - t1) / (1000 * 60 * 60));
    return (hours + ':' + min + ':00');
}


changeColor.onclick = function(element) {
  let color = element.target.value;
  chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
    //chrome.tabs.executeScript(
    //    tabs[0].id,
    //    {code: 'document.body.style.backgroundColor = "' + color + '";'});
    var currentTime = new Date();
    var currentTimeStr = currentTime.getFullYear() + "-" + currentTime.getMonth() + "-" + currentTime.getDay() + "," + currentTime.getHours() + ':' + currentTime.getMinutes() + ':' + currentTime.getSeconds();


    var lastTimeStr;
    chrome.storage.sync.get('lastTimeStr', function (data) {
        if (data.lastTimeStr == 'undefined') {
            console.log("lastTimeStr: set it for the first time")
            lastTimeStr = currentTimeStr;
        } else {
            console.log("lastTimeStr: already exists on storage, so the value will be retrieve from it");
            lastTimeStr = data.lastTimeStr;
        }
        setLastTimeStr(currentTimeStr);
        var line1 = "last: " + lastTimeStr;
        console.log(line1);
        var line2 = "current: " + currentTimeStr;
        console.log(line2);

        var lastTimeDate = getDateObject(lastTimeStr);
        var currentTimeDate = getDateObject(currentTimeStr);

        var line3 = "Elapsed Time: "+gettimediffViaSeconds(lastTimeDate, currentTimeDate);
        console.log(line3);
        alert(line1 + "\n" + line2 + "\n" + line3,);
    })
  });
};

