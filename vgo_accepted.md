# The vgo proposal is accepted. Now what?
原文：https://research.swtch.com/vgo-accepted


作者：[Russ Cox](https://swtch.com/~rsc/)

翻译时间：2019-11-16

# vgo 提案被接受了，然后呢？
（[Go 与版本](https://research.swtch.com/vgo)，第 8 部分）

发表时间：2018-05-29 周二 [PDF](https://research.swtch.com/vgo-accepted.pdf)


# 正文
上周，提案委员会接受了 2 月份在本博客中描述的 `vgo 方法`，并总结为 [proposal #24301](https://golang.org/issue/24301)。大家可能会疑惑这一举动具体是指什么？下一步将会发生什么？

通常，[一个 Go 提案](https://golang.org/s/proposal) 是关于是否接受某种方法的讨论，一旦接受将会编写代码、审核、发布为生产版本。接受一个提案并不代表已实现此提案（有时甚至可以连一点实现都还没开始）。接受一个提案仅仅表示我们相信该设计方案是适合的，并且可在生产版本中处理、提交和发布。在此过程中，必然会有一些细节需要调整。

目前的 Vgo 版本并不是最终的实现。它只是一个设计思想具体化的原型，并可针对该方案做一些实验。在我们将其发布为 go 命令的官方方法之前，会有很多 bug 和设计瑕疵要修复。例如，为了可以让用户无需使用版本管理工具和提高下载效率，最开始的 vgo 原型利用一些网站的 API 如 Github 来下载代码。但 Github API 的访问速度远比直接 git 访问限制得更低，所以目前的 vgo 实现又回退到了直接调用 git 命令。虽然我们仍然想 [摆脱](https://blogs.msdn.microsoft.com/devops/2018/05/29/announcing-the-may-2018-git-security-vulnerability/) 对版本管理工具的依赖，但我们不会贸然行动，除非找到了可平滑替代的方法。

更通用来说，vgo 提案的关键原因是：为 Go 代码的版本添加统一的描述方式和语义化。这样开发者以及所有的相关工具都可以精确地与他人沟通，如描述一个程序该如何构建、运行、分析。接受提案只是开始，不是结束。

我从很多人口中听到的一件事是：他们想在他们的公司或项目上使用 vgo，但无奈开发者的工具链中缺乏相应的支持。事实是，vgo 将被深度整合到 go 命令中，而非一个独立的包管理工具，然而，这就引发了先有鸡还是先有蛋的问题。为了解决这个问题，也为了让开发者更容易地尝试 vgo，我们计划将在 Go 1.11 以实验可选形式包含 vgo 功能。希望从中听取各方的使用反馈，并在 Go 1.12 中最终确定此功能。（这就像我们之前以实验可选形式在 Go 1.5 中引入的 `vendor` 目录功能，并最终在 Go 1.6 中默认启用）我们同时也希望 [以最小的修改来改造 `go get`](https://golang.org/issue/25069)，使得可以方便地使用 vgo 来获取、理解代码。这些修改将会体现在接下来的 Go 1.9 和 Go 1.10 中。

几乎没有一个人说希望我的 [这些关于 vgo 的博客](https://research.swtch.com/vgo) 写得更长一些。这些博客已经包含太多信息量了，而且还有一大部分关键点没有列出来。本文是一些列短文的其中的第一篇，这些短文主要介绍 vgo 的设计、方法、进度中的关键点。
