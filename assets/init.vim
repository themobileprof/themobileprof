" ~/.config/nvim/init.vim 
call plug#begin('~/.local/share/nvim/plugged')
	Plug 'preservim/nerdtree'
	Plug 'mattn/emmet-vim'
	Plug 'junegunn/fzf'
	Plug 'itchyny/lightline.vim'
	Plug 'jiangmiao/auto-pairs'
	Plug 'preservim/nerdcommenter'
	Plug 'neoclide/coc.nvim', {'branch': 'release'}
	Plug 'tpope/vim-surround'
	Plug 'junegunn/fzf.vim'
call plug#end()


nmap <C-o> :NERDTreeToggle<CR>

let g:user_emmet_leader_key=','

" Use Ctrl-space to trigger completion
inoremap <silent><expr> <c-space> coc#refresh()


" Use tab for trigger completion with characters ahead and navigate.
" Use command ':verbose imap <tab>' to make sure tab is not mapped by other plugin.
inoremap <silent><expr> <TAB>
      \ pumvisible() ? "\<C-n>" :
      \ <SID>check_back_space() ? "\<TAB>" :
      \ coc#refresh()
inoremap <expr><S-TAB> pumvisible() ? "\<C-p>" : "\<C-h>"

function! s:check_back_space() abort
  let col = col('.') - 1
  return !col || getline('.')[col - 1]  =~# '\s'
endfunction

