<?php

/*
 --- SINGLE RESPONSIBILITY PRINCIPLE (SRP) ---
 A class should have only one reason to change[1]
 */

/*
 Usualy we create a class on perspective subject, an put it's capability in
 one class
 */
interface CopyMachine
{
    public function turnOn();
    public function turnOff();
    public function copyPaper();
}

/*
 Actualy those object have some responsibiliy
 */
interface CopyMachinePower
{
    public function turnOn();
    public function turnOff();
}

interface CopyMachineCopyProcess
{
    public function copyPaper();
}

class XeroyCopyMachine implements CopyMachinePower, CopyMachineCopyProcess
{
    public function turnOn()
    {
        // implemetation how to trun on Xeroy Copy Machine
    }

    public function turnOff()
    {
        // implemetation how to trun off Xeroy Copy Machine
    }

    public function copyPaper()
    {
        // implemetation how to Xeroy copy a paper
    }
}


