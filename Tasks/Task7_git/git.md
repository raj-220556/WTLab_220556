# Git Industry Commands Practice

---

# 1. Git Configuration Commands

## git config --global user.name

### Syntax

git config --global user.name "Your Name"

### Purpose

Sets the username that will be associated with your Git commits on the system.

### Example

git config --global user.name "raj-220556"

### Screenshot

![git config username](</images/Screenshot%20(19).png>)

---

## git config --global user.email

### Syntax

git config --global user.email "your-email@example.com"

### Purpose

Sets the email address that will be associated with Git commits.

### Example

git config --global user.email "user@example.com"

### Screenshot

![git config email](</images/Screenshot%20(20).png>)

---

## git config --list

### Syntax

git config --list

### Purpose

Displays all Git configuration settings currently applied to the system.

### Screenshot

![git config list](</images/Screenshot%20(21).png>)

---

## git config --unset

### Syntax

git config --global --unset user.name

### Purpose

Removes a previously set Git configuration value.

### Screenshot

![git config unset](</images/Screenshot%20(22).png>)

---

# 2. Repository Setup Commands

## git init

### Syntax

git init

### Purpose

Initializes a new Git repository in the current directory.

### Screenshot

![git init](images\Screenshot (23).png)

---

## git clone

### Syntax

git clone <repository-url>

### Purpose

Creates a copy of an existing remote repository on your local machine.

### Screenshot!

[alt text](</images/Screenshot%20(24).png>)

---

## git clone --branch

### Syntax

git clone --branch <branch-name> <repository-url>

### Purpose

Clones a repository and checks out the specified branch.

### Screenshot

![alt text](</images/Screenshot (25).png)

## git clone --depth

### Syntax

git clone --depth <number> <repository-url>

### Purpose

Creates a shallow clone with limited commit history.

### Screenshot

![git clone depth](</images/Screenshot%20(26).png>)

---

# 3. Repository Status & Inspection

## git status

### Syntax

git status

### Purpose

Shows the current state of the repository and staged changes.

### Screenshot

![git status](</images/Screenshot%20(27).png>)

---

## git log

### Syntax

git log

### Purpose

Displays the full commit history of the repository.

### Screenshot

![git log](</images/Screenshot%20(28).png>)

---

## git log --oneline

### Syntax

git log --oneline

### Purpose

Shows commit history in a simplified one-line format.

### Screenshot

![git log oneline](</images/Screenshot%20(30).png>)

---

## git log --graph

### Syntax

git log --graph

### Purpose

Displays commit history with a graphical representation of branches.

### Screenshot

![git log graph](</images/Screenshot%20(31).png>)

---

## git show

### Syntax

git show

### Purpose

Displays detailed information about a specific commit.

### Screenshot

![git show](</images/Screenshot%20(32).png>)

---

## git diff

### Syntax

git diff

### Purpose

Shows changes between working directory and last commit.

### Screenshot

![git diff](</images/Screenshot%20(33).png>)

---

## git diff --staged

### Syntax

git diff --staged

### Purpose

Displays differences between staged files and the last commit.

### Screenshot

![git diff staged](</images/Screenshot%20(34).png>)

---

## git blame

### Syntax

git blame <file-name>

### Purpose

Shows who modified each line of a file and when.

### Screenshot

![git blame](</images/Screenshot%20(35).png>)

---

## git reflog

### Syntax

git reflog

### Purpose

Displays a history of all actions performed on HEAD.

### Screenshot

![git reflog](</images/Screenshot%20(36).png>)

---

## git shortlog

### Syntax

git shortlog

### Purpose

Shows a summary of commit history grouped by author.

### Screenshot

![git shortlog](</images/Screenshot%20(37).png>)

---

# 4. File Tracking Commands

## git add

### Syntax

git add <file-name>

### Purpose

Adds a specific file to the staging area.

### Screenshot

![git add](</images/Screenshot%20(38).png>)

---

## git add .

### Syntax

git add .

### Purpose

Adds all modified and new files to the staging area.

### Screenshot

![git add dot](</images/Screenshot%20(39).png>)

---

## git add -p

### Syntax

git add -p

### Purpose

Allows interactive staging of changes.

### Screenshot

![git add p](</images/Screenshot%20(40).png>)

---

## git restore

### Syntax

git restore <file-name>

### Purpose

Restores the file to the last committed version.

### Screenshot

![git restore](</images/Screenshot%20(44).png>)

---

## git restore --staged

### Syntax

git restore --staged <file-name>

### Purpose

Removes a file from the staging area.

### Screenshot

![git restore staged](</images/Screenshot%20(42).png>)

---

## git rm

### Syntax

git rm <file-name>

### Purpose

Deletes a file from the working directory and Git repository.

### Screenshot

![git rm](</images/Screenshot%20(43).png>)

---

## git mv

### Syntax

git mv <old-name> <new-name>

### Purpose

Renames or moves a file while keeping Git tracking.

### Screenshot

![git mv](</images/Screenshot%20(45).png>)

---

# 5. Commit Commands

## git commit

### Syntax

git commit

### Purpose

Records changes to the repository and opens a text editor for commit message.

### Screenshot

![git commit](</images/Screenshot%20(48).png>)

---

## git commit -m

### Syntax

git commit -m "commit message"

### Purpose

Creates a commit with a message directly from the terminal.

### Screenshot

![git commit m](</images/Screenshot%20(49).png>)

---

## git commit --amend

### Syntax

git commit --amend

### Purpose

Modifies the most recent commit.

### Screenshot

![git commit amend](</images/Screenshot%20(50).png>)

---

## git commit --no-edit

### Syntax

git commit --amend --no-edit

### Purpose

Amends the last commit without changing the commit message.

### Screenshot

![git commit no edit](</images/Screenshot%20(51).png>)

---

# 6. Branch Management Commands

## git branch

### Syntax

git branch

### Purpose

Lists all local branches in the repository.

### Screenshot

![git branch](</images/Screenshot%20(52).png>)

---

## git branch -a

### Syntax

git branch -a

### Purpose

Displays both local and remote branches.

### Screenshot

![git branch a](</images/Screenshot%20(53).png>)

---

## git branch -d

### Syntax

git branch -d <branch-name>

### Purpose

Deletes a branch safely.

### Screenshot

![git branch d](</images/Screenshot%20(54).png>)

---

## git branch -D

### Syntax

git branch -D <branch-name>

### Purpose

Force deletes a branch.

### Screenshot

![git branch D](</images/Screenshot%20(55).png>)

---

## git checkout

### Syntax

git checkout <branch-name>

### Purpose

Switches to another branch.

### Screenshot

![git checkout](</images/Screenshot%20(57).png>)

---

## git checkout -b

### Syntax

git checkout -b <branch-name>

### Purpose

Creates a new branch and switches to it.

### Screenshot

![git checkout b](</images/Screenshot%20(56).png>)

---

## git switch

### Syntax

git switch <branch-name>

### Purpose

Switches to another branch.

### Screenshot

![git switch](</images/Screenshot%20(58).png>)

---

## git switch -c

### Syntax

git switch -c <branch-name>

### Purpose

Creates and switches to a new branch.

### Screenshot

![git switch c](</images/Screenshot%20(59).png>)

---

# 7. Merge & Integration Commands

## git merge

### Syntax

git merge <branch-name>

### Purpose

Combines changes from another branch into the current branch.

### Screenshot

![git merge](</images/Screenshot%20(60).png>)

---

## git merge --no-ff

### Syntax

git merge --no-ff <branch-name>

### Purpose

Forces a merge commit even when fast-forward is possible.

### Screenshot

![git merge no ff](</images/Screenshot%20(61).png>)

---

# 8. Remote Repository Commands

## git remote

### Syntax

git remote

### Purpose

Lists the names of remote repositories connected to the local repository.

### Example

git remote

### Screenshot

![git remote](</images/Screenshot%20(62).png>)

---

## git remote -v

### Syntax

git remote -v

### Purpose

Displays remote repository URLs for fetch and push operations.

### Example

git remote -v

### Screenshot

![git remote -v](</images/Screenshot%20(63).png>)

---

## git remote add

### Syntax

git remote add origin <repository-url>

### Purpose

Adds a remote repository connection to the local project.

### Example

git remote add origin https://github.com/raj-220556/demo-git.git

### Screenshot

![git remote add](</images/Screenshot%20(64).png>)

---

## git remote remove

### Syntax

git remote remove origin

### Purpose

Removes a remote repository from the project.

### Example

git remote remove origin

### Screenshot

![git remote remove](</images/Screenshot%20(65).png>)

---

## git fetch

### Syntax

git fetch

### Purpose

Downloads commits and objects from the remote repository without merging them.

### Example

git fetch origin

### Screenshot

![git fetch](</images/Screenshot%20(66).png>)

---

## git fetch --all

### Syntax

git fetch --all

### Purpose

Fetches updates from all configured remote repositories.

### Example

git fetch --all

### Screenshot

![git fetch all](</images/Screenshot%20(67).png>)

---

## git pull

### Syntax

git pull

### Purpose

Fetches and merges changes from the remote repository into the current branch.

### Example

git pull origin main

### Screenshot

![git pull](</images/Screenshot%20(68).png>)

---

## git pull --rebase

### Syntax

git pull --rebase

### Purpose

Fetches remote changes and rebases local commits on top of them to maintain a linear history.

### Example

git pull --rebase origin main

### Screenshot

![git pull rebase](</images/Screenshot%20(69).png>)

---

## git push

### Syntax

git push

### Purpose

Uploads local commits to the remote repository.

### Example

git push origin main

### Screenshot

![git push](</images/Screenshot%20(70).png>)

---

## git push -u origin branch-name

### Syntax

git push -u origin feature

### Purpose

Pushes a branch to the remote repository and sets the upstream tracking branch.

### Example

git push -u origin feature

### Screenshot

![git push upstream](</images/Screenshot%20(71).png>)

---

## git push --force

### Syntax

git push --force

### Purpose

Forces Git to overwrite the remote repository history with local changes.

### Example

git push --force origin main

### Screenshot

![git push force](</images/Screenshot%20(72).png>)

---

# 9. Stash Commands

## git stash

### Syntax

git stash

### Purpose

Temporarily saves uncommitted changes so the working directory becomes clean.

### Example

git stash

### Screenshot

![git stash](</images/Screenshot%20(73).png>)

---

## git stash list

### Syntax

git stash list

### Purpose

Displays all stashed changes.

### Example

git stash list

### Screenshot

![git stash list](</images/Screenshot%20(74).png>)

---

## git stash pop

### Syntax

git stash pop

### Purpose

Applies the latest stash and removes it from the stash list.

### Example

git stash pop

### Screenshot

![git stash pop](</images/Screenshot%20(75).png>)

---

## git stash apply

### Syntax

git stash apply

### Purpose

Applies a stash without removing it from the stash list.

### Example

git stash apply

### Screenshot

![git stash apply](</images/Screenshot%20(76).png>)

---

## git stash drop

### Syntax

git stash drop stash@{0}

### Purpose

Deletes a specific stash from the stash list.

### Example

git stash drop stash@{0}

### Screenshot

![git stash drop](</images/Screenshot%20(77).png>)

---

## git stash clear

### Syntax

git stash clear

### Purpose

Deletes all saved stashes.

### Example

git stash clear

### Screenshot

![git stash clear](</images/Screenshot%20(78).png>)

---

# 10. Reset & Undo Commands

## git reset

### Syntax

git reset HEAD~1

### Purpose

Moves the current branch pointer to a previous commit.

### Example

git reset HEAD~1

### Screenshot

![git reset](</images/Screenshot%20(79).png>)

---

## git reset --soft

### Syntax

git reset --soft HEAD~1

### Purpose

Moves HEAD to a previous commit but keeps changes staged.

### Example

git reset --soft HEAD~1

### Screenshot

![git reset soft](</images/Screenshot%20(80).png>)

---

## git reset --mixed

### Syntax

git reset --mixed HEAD~1

### Purpose

Moves HEAD to a previous commit and unstages changes.

### Example

git reset --mixed HEAD~1

### Screenshot

![git reset mixed](</images/Screenshot%20(80).png>)

---

## git reset --hard

### Syntax

git reset --hard HEAD~1

### Purpose

Moves HEAD to a previous commit and deletes all changes in the working directory.

### Example

git reset --hard HEAD~1

### Screenshot

![git reset hard](</images/Screenshot%20(81).png>)

---

## git revert

### Syntax

git revert HEAD

### Purpose

Creates a new commit that reverses the changes introduced by a previous commit.

### Example

git revert HEAD

### Screenshot

![git revert](</images/Screenshot%20(82).png>)

---

## git clean -f

### Syntax

git clean -f

### Purpose

Removes untracked files from the working directory.

### Example

git clean -f

### Screenshot

![git clean f](</images/Screenshot%20(83).png>)

---

## git clean -fd

### Syntax

git clean -fd

### Purpose

Removes untracked files and directories.

### Example

git clean -fd

### Screenshot

![git clean fd](</images/Screenshot%20(83).png>)


# 11. Rebasing Commands

## git rebase

### Syntax
git rebase <branch-name>

### Purpose
Reapplies commits from the current branch on top of another branch, creating a cleaner and linear commit history.

### Example
git rebase main

### Screenshot
![git rebase](/images/Screenshot%20(84).png)

---

## git rebase -i

### Syntax
git rebase -i HEAD~3

### Purpose
Starts an interactive rebase that allows you to edit, reorder, squash, or remove commits.

### Example
git rebase -i HEAD~3

### Screenshot
![git rebase interactive](/images/Screenshot%20(84).png)

---

## git rebase --continue

### Syntax
git rebase --continue

### Purpose
Continues the rebasing process after resolving conflicts.

### Example
git add file.txt  
git rebase --continue

### Screenshot
![git rebase continue](/images/Screenshot%20(84).png)

---

## git rebase --abort

### Syntax
git rebase --abort

### Purpose
Stops the rebase process and returns the repository to the state before the rebase started.

### Example
git rebase --abort

### Screenshot
![git rebase abort](/images/Screenshot%20(85).png)

---

# 12. Cherry Pick & Patch Commands

## git cherry-pick

### Syntax
git cherry-pick <commit-id>

### Purpose
Applies a specific commit from another branch to the current branch.

### Example
git cherry-pick a1b2c3d

### Screenshot
![git cherry pick](/images/Screenshot%20(86).png)

---

## git format-patch

### Syntax
git format-patch -1 HEAD

### Purpose
Creates a patch file from commits that can be shared or applied to another repository.

### Example
git format-patch -1 HEAD

### Screenshot
![git format patch](/images/Screenshot%20(87).png)

---

## git apply

### Syntax
git apply <patch-file>

### Purpose
Applies the changes from a patch file to the working directory.

### Example
git apply 0001-feature-commit.patch

### Screenshot
![git apply](/images/Screenshot%20(88).png)

---

## git am

### Syntax
git am <patch-file>

### Purpose
Applies a patch and automatically creates a commit with the patch's commit message.

### Example
git am 0001-feature-commit.patch

### Screenshot
![git am](/images/Screenshot%20(89).png)

---

# 13. Tagging Commands

## git tag

### Syntax
git tag

### Purpose
Lists all tags in the repository.

### Example
git tag

### Screenshot
![git tag](/images/Screenshot%20(90).png)

---

## git tag -a

### Syntax
git tag -a v1.0 -m "First release"

### Purpose
Creates an annotated tag with a message.

### Example
git tag -a v1.0 -m "First release"

### Screenshot
![git tag annotated](/images/Screenshot%20(90).png)

---

## git tag -d

### Syntax
git tag -d v1.0

### Purpose
Deletes a tag from the local repository.

### Example
git tag -d v1.0

### Screenshot
![git tag delete](/images/Screenshot%20(91).png)

---

## git push origin --tags

### Syntax
git push origin --tags

### Purpose
Pushes all local tags to the remote repository.

### Example
git push origin --tags

### Screenshot
![git push tags](/images/Screenshot%20(92).png)

---

# 14. Submodule Commands

## git submodule add

### Syntax
git submodule add <repository-url>

### Purpose
Adds another Git repository as a submodule inside the current repository.

### Example
git submodule add https://github.com/git/git.git

### Screenshot
![git submodule add](/images/Screenshot%20(93).png)

---

## git submodule init

### Syntax
git submodule init

### Purpose
Initializes the submodule configuration defined in the repository.

### Example
git submodule init

### Screenshot
![git submodule init](/images/Screenshot%20(94).png)

---

## git submodule update

### Syntax
git submodule update

### Purpose
Fetches and checks out the correct version of the submodule.

### Example
git submodule update

### Screenshot
![git submodule update](/images/Screenshot%20(94).png)

---

# 15. Debugging Commands

## git bisect

### Syntax
git bisect

### Purpose
Helps find the commit that introduced a bug by performing a binary search through commit history.

### Example
git bisect

### Screenshot
![git bisect](/images/Screenshot%20(95).png)

---

## git bisect start

### Syntax
git bisect start

### Purpose
Starts the bisect process to locate a faulty commit.

### Example
git bisect start

### Screenshot
![git bisect start](/images/Screenshot%20(96).png)

---

## git bisect good

### Syntax
git bisect good <commit-id>

### Purpose
Marks a commit where the bug did not exist.

### Example
git bisect good a1b2c3d

### Screenshot
![git bisect good](/images/Screenshot%20(97).png)

---

## git bisect bad

### Syntax
git bisect bad

### Purpose
Marks the current commit as containing the bug.

### Example
git bisect bad

### Screenshot
![git bisect bad](/images/Screenshot%20(98).png)
