$msg = Read-Host -Prompt "Enter commit message"
Write-Output "git add ."
git add .
Write-Output "git commit -m\"$msg\""
git commit -m"$msg"
Write-Output "git push"
git push