<?php
class ENV
{
    #---------------------------------------
    # Main Data
    #---------------------------------------

    const SITE_URL = "http://localhost:8000/";
    const SITE_TITLE = "Pulse App";
    // use one of these ['production','development','maintenance']
    const ENVIROMENT = "development";


    #---------------------------------------
    # DATABASE
    #---------------------------------------

    const DB_HOST = "localhost";
    const DB_NAME = "pulse_db";
    const DB_USER = "root";
    const DB_PASS = "123AqSw";


    #---------------------------------------
    # ENCRYPTION
    #---------------------------------------

    //NOTICE: you should change these values
    const ENC_KEY = "JaNdRgUkXp2s5v8y/A?D(G+KbPeShVmY";
    const ENC_IV64 = "QAYNH1fb/Fq/bDc87WjxOQ==";
    const ENC_CIPHER = "AES-128-CBC";


    #---------------------------------------
    # OTHERS
    #---------------------------------------

    const TIME_ZONE = 'Asia/Beirut';
}
