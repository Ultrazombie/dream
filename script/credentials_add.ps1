If($Password) 
{ 
    [string]$result = cmdkey /add:$target /user:$userName /pass:$Password 
} 
Else 
{ 
    [string]$result = cmdkey /add:$target /user:$userName  
} 
If($result -match "The command line parameters are incorrect") 
{ 
    Write-Error "Failed to add Windows Credential to Windows vault." 
} 
ElseIf($result -match "CMDKEY: Credential added successfully") 
{ 
    Write-Host "Credential added successfully." 
}