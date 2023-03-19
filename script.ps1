$msg = Read-Host -Prompt "Enter commit message"
git add .
git commit -m"$msg"
git push