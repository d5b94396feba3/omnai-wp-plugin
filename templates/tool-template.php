<div class="f2e-tool-wrapper max-w-7xl mx-auto px-4 py-8 lg:py-12">
    <div class="mb-10">
        <h3 class="f2e-section-title text-4xl font-extrabold text-slate-900 mb-2">Content Studio</h3>
        <p class="text-slate-500 text-lg">Generate high-converting social and blog content in seconds.</p>
    </div>

    <div class="f2e-grid-container grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10">
        <div class="f2e-column lg:col-span-1 f2e-left-column">
            <div class="f2e-card f2e-description-field f2e-description-section border border-slate-200 rounded-2xl shadow-xl bg-white overflow-hidden transition-all duration-300 hover:shadow-2xl h-full p-8 flex flex-col">
                
                <div class="f2e-form-group space-y-6 flex-1 flex flex-col">
                    <div class="f2e-toggle-switch flex items-center justify-between p-1 bg-slate-100 rounded-xl border border-slate-200">
                        <label for="f2e-input-mode-toggle" class="f2e-switch-label flex-1 text-center py-2 text-sm font-bold cursor-pointer transition-all">Text</label>
                        <label class="f2e-switch">
                            <input type="checkbox" id="f2e-input-mode-toggle">
                            <span class="f2e-slider"></span>
                        </label>
                        <label for="f2e-input-mode-toggle" class="f2e-switch-label flex-1 text-center py-2 text-sm font-bold cursor-pointer transition-all">Youtube</label>
                    </div>

                    <div id="f2e-text-input-container">
                        <div class="f2e-textarea-wrapper flex-1">
                            <label for="f2e-description" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Content Topic</label>
                            <input type="hidden" name="desc-tag-name" value="">
                            <textarea id="f2e-description" name="description" class="w-full p-4 border border-slate-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 h-40 resize-none transition-all text-slate-800 bg-slate-50 placeholder:text-slate-400" 
                            placeholder="Give a topic name or description or any text..."></textarea>
                        </div>
                    </div>

                    <div id="f2e-youtube-input-container" class="f2e-hidden">
                        <div id="panel-website" role="tabpanel" aria-labelledby="tab-website" class="tab-panel">
                            <label for="f2e-site-url" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Youtube Video URL</label>
                            <input type="url" id="f2e-site-url" placeholder="https://www.youtube.com/watch?v=..." class="w-full px-4 py-3 text-sm text-slate-800 border border-slate-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 bg-slate-50 transition-all">
                        </div>
                        
                        <button type="button" id="f2e-toggle-yt-description" class="mt-4 w-full f2e-button f2e-button-secondary py-3 px-4 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center gap-2 transition-all text-sm font-semibold">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                            Instructions (Optional)
                        </button>
                        
                        <div id="f2e-description-yt-container" class="mt-4 f2e-hidden">
                            <textarea id="f2e-description-yt" name="description-yt" class="w-full p-4 border border-slate-200 rounded-xl h-32 bg-slate-50 focus:border-indigo-500 transition-all" placeholder="E.g., Focus only on the technical details..."></textarea>
                        </div>
                    </div>
                    
                    <div class="f2e-setting-group">
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Target Platform</label>
                        <div class="relative">
                            <select id="f2e-content-type" class="w-full p-3 pr-10 border border-slate-200 rounded-xl bg-slate-50 text-slate-800 font-medium appearance-none cursor-pointer focus:border-indigo-500 transition-all">
                                <option value="medium">Medium Post</option>
                                <option value="devio">Dev.io Post</option>
                                <option value="linkedin">Linkedin Post</option>
                                <option value="facebook">Facebook Post</option>
                                <option value="instagram">Instagram Post</option>
                                <option value="x-twitter">X (Twitter) Post</option>
                                <option value="website">Website Blog Post</option>
                            </select>
                            <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-slate-400">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="f2e-setting-group">
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Quality Level</label>
                        <div class="f2e-iteration-selector flex p-1 bg-slate-100 rounded-xl border border-slate-200" role="radiogroup">
                            <button type="button" class="f2e-iteration-option flex-1 py-2 text-xs font-bold rounded-lg transition-all" data-value="1">Draft (1)</button>
                            <button type="button" class="f2e-iteration-option active flex-1 py-2 text-xs font-bold rounded-lg transition-all bg-white shadow-sm text-indigo-600" data-value="2">Polished (2)</button>
                        </div>
                    </div>

                    <button id="f2e-advanced-settings-button" type="button" class="w-full f2e-button f2e-button-secondary py-3 px-4 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center gap-2 transition-all font-semibold text-sm">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20v-8M12 4v4M4 12h4M16 12h4M6 16v-2h12v2M8 8v8M16 8v8"/></svg>
                        Advanced Tuning
                    </button>
                </div>

                <button id="f2e-generate-button" class="f2e-button f2e-button-primary py-4 px-6 text-lg font-bold w-full mt-8 flex items-center justify-center gap-3 rounded-2xl shadow-xl bg-gradient-to-r from-indigo-600 to-blue-700 text-white hover:scale-[1.02] active:scale-[0.98] transition-all disabled:opacity-50">
                    <span class="f2e-button-content flex items-center gap-2">
                        Magic Generate
                        <span class="f2e-points-badge px-3 py-1 bg-white/20 rounded-full text-[10px] uppercase font-black">100 Points</span>
                    </span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="f2e-button-icon">
                        <path d="M13 6L19 12L13 18M5 6L11 12L5 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="f2e-column lg:col-span-2">
            <div class="f2e-result-section f2e-card p-0 border border-slate-200 rounded-2xl shadow-xl bg-white overflow-hidden transition-all duration-300 flex flex-col min-h-[600px]">
                
                <div id="f2e-result-container" class="flex-1 flex flex-col">
                    <div class="f2e-tabs-container bg-slate-50 border-b border-slate-200 p-4 flex items-center justify-between flex-wrap gap-4">
                        <div class="f2e-tabs-nav flex bg-slate-200/50 p-1 rounded-xl">
                            <button class="f2e-tab-button active flex items-center gap-2 py-2 px-6 rounded-lg font-bold text-sm transition-all" data-tab="preview">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/></svg>
                                PREVIEW
                            </button>
                            <button class="f2e-tab-button flex items-center gap-2 py-2 px-6 rounded-lg font-bold text-sm transition-all" data-tab="code">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                                DETAILS
                            </button>
                        </div>

                        <div class="f2e-result-actions f2e-hidden flex items-center gap-2">
                            <button id="f2e-copy-button" class="f2e-button-secondary p-2.5 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 transition-all text-slate-600" title="Copy Content">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 16H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2m-6 12h8a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2z"/></svg>
                            </button>
                            <button id="f2e-download-button" class="f2e-button-secondary p-2.5 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 transition-all text-slate-600" title="Download">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4m4-5l3 3 3-3m-3-7v10"/></svg>
                            </button>
                            <button id="f2e-clear-button" class="f2e-button2 f2e-button-danger p-2.5 rounded-xl border border-rose-100 bg-rose-50 hover:bg-rose-100 text-rose-600 transition-all" title="Clear">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18m-2 0v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            </button>
                        </div>
                    </div>

                    <div class="p-6 flex-1 overflow-auto bg-white">
                        <div class="f2e-tab-content active" id="preview-tab">
                            <div class="f2e-preview-container rounded-xl overflow-hidden h-[500px] border border-slate-100">
                                <iframe id="f2e-preview-frame" class="w-full h-full border-0" sandbox="allow-same-origin allow-scripts"></iframe>
                            </div>
                        </div>

                        <div class="f2e-tab-content hidden" id="code-tab">
                            <div class="f2e-code-container bg-slate-900 text-slate-300 rounded-xl p-6 font-mono text-sm shadow-inner min-h-[400px]">
                                <pre><code id="f2e-result" class="language-html">No content generated yet.</code></pre>
                            </div>
                        </div>

                        <div id="f2e-loading" class="f2e-loading-container f2e-hidden flex flex-col items-center justify-center py-20">
                            <div class="relative h-24 w-24">
                                <div class="f2e-loading-spinner animate-spin rounded-full h-full w-full border-[6px] border-slate-100 border-t-indigo-600"></div>
                                <div class="absolute inset-0 flex items-center justify-center font-black text-indigo-600 text-xs">AI</div>
                            </div>
                            <div class="f2e-loading-content mt-8 text-center max-w-sm">
                                <h4 id="f2e-iteration-heading" class="text-xl font-bold text-slate-900 mb-2">Architecting Content...</h4>
                                <p id="f2e-iteration-status" class="text-slate-500 text-sm italic">Our AI is drafting and refining your request.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="f2e-advanced-modal" class="f2e-modal fixed inset-0 z-[2000] bg-slate-900/80 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="f2e-modal-content bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden flex flex-col scale-95 transition-all duration-300">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                <h5 class="text-xl font-bold text-slate-900">Advanced Tuning</h5>
                <button type="button" class="f2e-close-modal p-2 rounded-full hover:bg-slate-200 text-slate-500">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </div>
            
            <div class="f2e-modal-body p-8 space-y-6 max-h-[70vh] overflow-y-auto">
                <div>
                    <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Target Keyword</label>
                    <input type="text" id="f2e-target-keyword" placeholder="e.g. SEO Optimization" class="w-full px-4 py-3 border border-slate-200 rounded-xl bg-slate-50 focus:border-indigo-500 transition-all outline-none">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Audience</label>
                        <select id="f2e-audience-level" class="w-full p-3 border border-slate-200 rounded-xl bg-slate-50">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Tone</label>
                        <select id="f2e-desired-tone" class="w-full p-3 border border-slate-200 rounded-xl bg-slate-50">
                            <option value="Tutorial">Tutorial</option>
                            <option value="Thought Leadership">Expert</option>
                            <option value="Casual">Casual</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Language</label>
                        <select id="f2e-language" class="w-full p-3 border border-slate-200 rounded-xl bg-slate-50">
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Length</label>
                        <select id="f2e-required-length" class="w-full p-3 border border-slate-200 rounded-xl bg-slate-50">
                            <option value="Short">Short</option>
                            <option value="Medium">Medium</option>
                            <option value="Long">Long</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase text-slate-400 mb-2 tracking-widest">Call to Action (CTA)</label>
                    <textarea id="f2e-call-to-action" class="w-full p-4 border border-slate-200 rounded-xl h-24 bg-slate-50 outline-none focus:border-indigo-500 transition-all" placeholder="Subscribe to our newsletter..."></textarea>
                </div>
            </div>
            
            <div class="p-6 border-t border-slate-100 bg-slate-50 text-right">
                <button type="button" class="f2e-close-modal px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-200 transition-all active:scale-95">Save Settings</button>
            </div>
        </div>
    </div>

    <div class="f2e-disclaimer mt-8 p-5 bg-indigo-50 text-indigo-800 rounded-2xl text-xs font-medium border border-indigo-100 flex items-center gap-4">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-indigo-400 flex-shrink-0"><path d="M12 16V12m0-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        <span>Important: Your input and generated content are not stored. All data will be cleared upon page refresh.</span>
    </div>
</div>