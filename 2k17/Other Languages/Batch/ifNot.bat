@echo off
title If Not Command
:a
set/p protection=Enter password:
if%protection%==hi goto correct
if not %protection%==hi goto incorrect

:correct
cls
echo Correct pass!!
pause
exit

:incorrect
cls 
echo Incorrect pass!
pause
goto :a
exit