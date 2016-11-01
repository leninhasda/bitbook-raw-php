# Instructions for Contributing

## Here is how you get started:
* `Fork` the repo to your account
* `git clone` from you fork
* Add original repo as `upstream`
```
git remote add upstream https://github.com/python-bangladesh/pybd.org.git
```
* *Recommended:* Create a local dev branch (ex: `dev-lenin`) and work in that branch.
* Before pushing your changes, checkout master branch and pull the latest changes from upstream
```
git checkout master
git pull upstream master
```
* Go back to your local dev branch (ex: dev-lenin) and `rebase` from master. Resolve any conflicts that may happen in this step
```
git checkout dev-lenin
git rebase master
# resolve conflicts, if any, and commit those before pushing it to github
```
* Push your changes on a new branch into you fork
```
git push origin dev-lenin:new-branch-name
```
* Finally go to your or original repo and make a pull request if everything is ok.

## Some other Guidelines:
0. [Common Git Commands [Bangla]](http://leninhasda.me/%E0%A6%95%E0%A6%AE%E0%A6%A8-%E0%A6%95%E0%A6%BF%E0%A6%9B%E0%A7%81-%E0%A6%97%E0%A6%BF%E0%A6%9F-%E0%A6%95%E0%A6%AE%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A1-42)
1. [Codeing Style Guide](guide/001-style-guide.md)
2. [Project Structure](guide/002-project-structure.md)
