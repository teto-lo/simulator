# デザイン・実装ガイドライン

今後新しいコンテンツやツールを追加する際は、以下のルールを必ず遵守してください。

## 1. サイトブランディング
- **サイト名**: 全ファイル（Bladeテンプレート、メタデータ、構造化データなど）において、サイト名は必ず「**計算ラボ**」を使用してください。
- "Calculator Labs" などの英語表記は使用しないでください。

## 2. アイコンの形状
- **円形統一**: アイコンを表示するコンテナ（背景色がついている部分）は、必ず完全な円形 (`rounded-full`) にしてください。
- 角丸正方形 (`rounded-xl`, `rounded-2xl`) は使用しないでください。

```html
<!-- NG: 角丸 -->
<div class="rounded-2xl ...">

<!-- OK: 完全な円 -->
<div class="rounded-full ...">
```

## 3. カードの背景装飾（最重要）
- **視認性の確保**: カード右上に配置する半円の装飾 (`rounded-bl-full`) は、不透明度（Opacity）を使用した指定（例: `/20`, `/30`）を避け、**淡い色のソリッドカラー（不透明）** を使用してください。
- 環境（ブラウザやTailwindのバージョン）によって透過指定が効かず、装飾が見えなくなるのを防ぐためです。

```html
<!-- NG: 透過指定（見えなくなるリスクあり） -->
<div class="bg-gradient-to-br from-orange-400/20 to-red-600/20 ..."></div>

<!-- OK: 淡色ソリッド（確実に表示される） -->
<div class="bg-gradient-to-br from-orange-100 to-red-100 ..."></div>
```
- **カラー設定**:
  - オレンジ/赤系 → `from-orange-100 to-red-100`
  - ピンク/ローズ系 → `from-pink-100 to-rose-100`
  - 青/インディゴ系 → `from-blue-100 to-indigo-100`
  - 緑/エメラルド系 → `from-green-100 to-emerald-100`
  - 紫/バイオレット系 → `from-purple-100 to-violet-100`

## 4. カテゴリーテーマカラー
新しいツールを追加する際は、適切なカテゴリーのテーマカラーに従ってください。
新規カテゴリー追加時は、既存のカラーと被らないようにランダムなカラーを選択してください。

- **マーケティング**: Blue / Indigo
- **ビジネス分析**: Purple / Violet
- **金融・投資**: Green / Emerald
- **給与・税金**: Amber / Orange
- **フリーランス・副業**: Orange / Red
- **Web・クリエイター**: Pink / Rose
- **健康・フィットネス**: Green / Emerald
- **生活・実用**: Cyan / Blue

## 5. 詳細ページの実装ガイドライン
詳細ページ（ツールページ）を作成する際は、以下の構成を遵守してください。

### 背景・装飾
- **背景色**: ページ全体に `min-h-screen` とカテゴリーカラーのグラデーション（例: `bg-gradient-to-br from-slate-50 via-X-50 to-Y-100`）を適用してください。
- **背景装飾（Blob）**:
  - 右上と左下に配置されるアニメーション付きの装飾（Blob）には、`rounded-full` を使用してください。
  - 透過は使用せず、不透明度を調整したクラス（例: `bg-X-200/40`）を使用するか、淡色を使用してください。

```html
<div class="absolute inset-0 z-0 pointer-events-none">
    <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-orange-200/40 blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-red-200/40 blur-[100px]"></div>
</div>
```

### ヒーローセクション
- **アイコン**: タイトル左のアイコンコンテナは必ず `rounded-full` にしてください。
- **タイトル**: `text-3xl md:text-5xl` を使用。
- **説明文**: `text-lg md:text-xl` で、背景色に合わせた淡い文字色（例: `text-orange-100`）を使用してください。

```html
<div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-full shadow-lg">
    <!-- Icon SVG -->
</div>
```

### パンくずリスト
- ヒーローセクションの上に配置し、カテゴリーカラーに合わせたホバー色を設定してください。

## 6. 補足セクション（添付セクション）の実装ガイドライン
ツールには、計算機能以外に以下の補足セクションを必要に応じて追加してください。

### ① こんなときに便利 (`Convenience Points`)
ユーザーに利用シーンを提案するセクションです。
- **配置**: ヒーローセクションの直下
- **デザイン**:
  - `bg-white/90` + `backdrop-blur-sm`
  - 枠線: カテゴリーカラーのボーダー（例: `border-orange-100`）
  - 見出し: 電球アイコン（💡）または対応するアイコンを使用
  - リスト: グリッドレイアウト（`md:grid-cols-2 lg:grid-cols-3`）でカード形式

### ② 使い方 (`Usage`)
ツールの操作手順を解説するセクションです。
- **ステップ番号**: 数字入りの円形アイコン（例: `bg-green-100 text-green-600 rounded-full`）を使用
- **レイアウト**: 左右分割（`md:grid-cols-2`）などを活用し、見やすく配置
- **背景**: 白ベースのカード（`bg-white ... shadow-xl`）

### ③ 情報テーブル・解説 (`Info Table`)
「72の法則」や「早見表」などの補足データです。
- **テーブルデザイン**:
  - ヘッダー: カテゴリーカラーの薄い背景（例: `bg-emerald-50`）
  - 行: ストライプやホバーエフェクト（`hover:bg-emerald-50/50`）を追加
  - 文字: 明瞭なコントラスト（`text-gray-800`）

### ④ FAQ (`Frequently Asked Questions`)
よくある質問セクションです。
- **デザイン**: アコーディオン形式またはカード形式
- **質問（Q）**: 太字で目立たせる
- **回答（A）**: 読みやすい行間とグレーの文字色（`text-gray-600`）

