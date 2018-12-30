@echo off
title User Input
echo Press 1 to make me say hi
echo Press 2 to make me say bye
set/p car=
if %car% ==1 goto hi
if %car% ==2 goto bye
:hi
echo Hi
pause 
exit

:bye
echo Bye
pause 
exit